<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Roles;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Gate;



use App\Http\Resources\User as UserResource;

class SuperadministratorController extends BaseController
{
                    /**
    * @OA\Get(
    *     path="/api/admin/super-administrator",
    *     summary="Mostrar usuarios super administrador",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los super administrador."
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
        $sadmin = DB::table('users')
                    ->join('roles_user','users.id', '=','roles_user.user_id')
                    ->where('roles_id','=',1)
                    ->whereNull('deleted_at')
                    ->select('users.*')
                    ->get();
        return $this->sendResponse(($sadmin), 'Users Super-Administrator retrieved successfully.');

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
        // $sadmin = User::find($id);
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'password'=> 'required',

        ]);
        $role = Roles::find(1); //Rol Super-Admin

        $role->users()->create([
            'name'                  => $request->name,
            'email'                 => $request->email,
            'password'              => Crypt::encrypt($request->password),
        ]);
        return $this->sendResponse(($role), 'Super admin created successfully.');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sadmin = User::find($id);
        if (is_null($sadmin)) {
            return $this->sendError('User not found.');
        }

        return $this->sendResponse(($sadmin), 'Users Super-Administrator retrieved successfully.');
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
        $sadmin = User::find($id);
        $sadmin->update($request->all());
        return $this->sendResponse(($sadmin), 'Users Super-Administrator updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sadmin = User::find($id);
        $sadmin ->delete();
        return $this->sendResponse([], 'User deleted successfully.');

    }
}
