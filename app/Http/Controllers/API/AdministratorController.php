<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Roles;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use App\Http\Resources\User as UserResource;
use Illuminate\Support\Facades\Gate;


class AdministratorController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
        // Gate::authorize('haveaccess','admin.index');

        $admin = DB::table('users')
                ->join('roles_user','users.id', '=','roles_user.user_id')
                ->where('roles_id','=',2)
                ->whereNull('deleted_at')
                ->select('users.*')
                ->get();
        return $this->sendResponse(($admin), 'Users Administrator retrieved successfully.');
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
        $sadmin = User::find($id);
        $validator = Validator::make($input, [
            'name' => 'required',
            'email' => 'required',
            'email_verified_at' => 'required',
            'password' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $role = Role::find(2); //Rol Admin

        $role->users()->create([
            'name'                  => $request->name,
            'email'                 => $request->email,
            'password'              => $request->password,
        ]);

        return $this->sendResponse(($role), 'Admin created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = User::find($id);
        if (is_null($admin)) {
            return $this->sendError('Product not found.');
        }

        return $this->sendResponse(new UserResource($admin), 'User Admin retrieved successfully.');
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
        $admin = User::find($id);
        $admin->update([
            'name'                  => $request->name,
            'email'                 => $request->email,
            'password'              => Crypt::encrypt($request->password),
            ]);
            return $this->sendResponse(($sadmin), 'Users Administrator updated successfully.');
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
