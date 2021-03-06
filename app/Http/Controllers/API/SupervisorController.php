<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Roles;
use App\Http\Resources\User as UserResource;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;




class SupervisorController extends BaseController
{

                        /**
    * @OA\Get(
    *     path="/api/admin/supervisor",
    *     summary="Mostrar usuarios  supervisor",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los super supervisor."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    /**
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supervisor = DB::table('users')
                    ->join('roles_user','users.id', '=','roles_user.user_id')
                    ->where('roles_id','=',3)
                    ->whereNull('deleted_at')
                    ->select('users.*')
                    ->get();
        return $this->sendResponse(($supervisor), 'Users supervisor retrieved successfully.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'password'=> 'required',

        ]);

        $role = Roles::find(3); //Rol Supervisor

        $role->users()->create([
            'name'                  => $request->name,
            'email'                 => $request->email,
            'password'              => Crypt::encrypt($request->password),
        ]);

        return $this->sendResponse(($role), 'Supervisor created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supervisor = User::find($id);
        if (is_null($supervisor)) {
            return $this->sendError('Supervisor not found.');
        }

        return $this->sendResponse(($supervisor), 'Users Supervisor retrieved successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $supervisor = User::find($id);
        $supervisor->update($request->all());
        return $this->sendResponse(new UserResource($supervisor), 'User Supervisor updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supervisor = User::find($id);
        $supervisor ->delete();
        return $this->sendResponse([], 'User deleted successfully.');
    }
}
