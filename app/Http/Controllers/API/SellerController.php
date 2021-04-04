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


class SellerController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seller = DB::table('users')
                    ->join('roles_user','users.id', '=','roles_user.user_id')
                    ->where('roles_id','=',4)
                    ->whereNull('deleted_at')
                    ->select('users.*')
                    ->get();
        return $this->sendResponse(($seller), 'Users Seller retrieved successfully.');
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
        $validator = Validator::make($input, [
            'name' => 'required',
            'email' => 'required',
            'email_verified_at' => 'required',
            'password' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        $role = Role::find(4); //Rol Seller
        $role->users()->create([
            'name'                  => $request->name,
            'email'                 => $request->email,
            'password'              => Crypt::encrypt($request->password),
        ]);

        return $this->sendResponse(($role), 'Seller created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seller = User::find($id);
        if (is_null($seller)) {
            return $this->sendError('Seller not found.');
        }

        return $this->sendResponse(($seller), 'Users Seller retrieved successfully.');
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
        $seller = User::find($id);
        $seller->update([
            'name'                  => $request->name,
            'email'                 => $request->email,
            'password'              => Crypt::encrypt($request->password),
            ]);
            return $this->sendResponse(($seller), 'Users Seller updated successfully.');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seller = User::find($id);
        $seller ->delete();
        return $this->sendResponse([], 'User deleted successfully.');
    }
}
