<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\Permissions;
use App\Http\Resources\Permission as PermissionResource;


class PermissionController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permission = Permissions::all();        
        $permission = Permissions::paginate(7);
        return $this->sendResponse(PermissionResource::collection($permission), 'Permission retrieved successfully.');

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
        $permission = new Permissions([
            'name'                                  => $request->get('name'),
            'slug'                                  => $request->get('slug'),
            'description'                           => $request->get('description'),
        ]);
        $permission->save();
        return $this->sendResponse(new PermissionResource($permission), 'Permission created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permission = Permissions::find($id);
        return $this->sendResponse(new PermissionResource($permission), 'Permission retrieved successfully.');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = Permissions::find($id);
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
        $permission = Permissions::find($id);
        $permission->update($request->all());
        return $this->sendResponse(new PermissionResource($permission), 'Permission updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permission = Permissions::find($id);
        $permission->delete();
        return $this->sendResponse([], 'Permission deleted successfully.');

    }
}
