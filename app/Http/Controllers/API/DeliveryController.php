<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Http\Resources\User as UserResource;

class DeliveryController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $delivery = DB::table('users')
        ->join('role_user','users.id', '=','role_user.user_id')
        ->where('role_id','=',5)
        ->whereNull('deleted_at')
        ->select('users.*')
        ->paginate(30);
        return $this->sendResponse(UserResource::collection($delivery), 'Users Delivery retrieved successfully.');
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
        $role = Role::find(5); //Rol Delivery
        $role->users()->create([
            'name'                  => $request->name,
            'email'                 => $request->email,
            'password'              => $request->password,
        ]);

        return $this->sendResponse(new UserResource($role), 'Seller created successfully.');
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

        return $this->sendResponse(new UserResource($seller), 'User Seller retrieved successfully.');
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
        $delivery = User::find($id);
        $delivery->update([
            'name'                  => $request->name,
            'email'                 => $request->email,
            'password'              => $request->password,
            ]);
        return $this->sendResponse(new UserResource($seller), 'User Supervisor updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delivery = User::find($id);
        $delivery ->delete();
        return $this->sendResponse([], 'Delivery deleted successfully.');
    }
}
