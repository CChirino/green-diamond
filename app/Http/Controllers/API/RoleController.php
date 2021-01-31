<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\Roles;
use App\Http\Resources\Role as RoleResource;

class RoleController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Roles::orderBy('id')->paginate(4);
        return $this->sendResponse(RoleResource::collection($role), 'Role retrieved successfully.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permiso = Permissions::get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:50',
            'description'=>'required|max:50',
            'full-access'=>'required|in:yes,no'
        ]);
        $role = Role::create($request->all());
        $role->permissions()->sync($request->get('permission'));
        $role->save();

        return $this->sendResponse(new RoleResource($role), 'Role created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Roles $role)
    {
        $permission_role=[];

        foreach($role->permissions as $permission) {
            $permission_role[]=$permission->id; 
        }

        $permiso = Permissions::get();

        return $this->sendResponse(new ProductResource($role), 'Product retrieved successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Roles $role)
    {
        $permission_role=[];

        foreach($role->permissions as $permission) {
            $permission_role[]=$permission->id; 
        }

        $permiso = Permissions::get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name'=>'required|max:50',
            'description'=>'required|max:50',
            'full-access'=>'required|in:yes,no'
        ]);
        $role->update($request->all());
        $role->permissions()->sync($request->get('permission'));
        $role->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
    }
}
