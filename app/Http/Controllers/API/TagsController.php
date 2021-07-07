<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\Tags;
use App\Http\Resources\Tags as TagsResource;
use Illuminate\Support\Facades\Gate;

class TagsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag = Tags::all();
        return $this->sendResponse(TagsResource::collection($tag), 'Tag retrieved successfully.');
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
        $request->validate([
            'tag_name' => 'required',
            'tag_slug' => 'required',
            'tag_description' => 'required',
        ]);
        $tag = new Tags([
            'tag_name'                                  => $request->get('tag_name'),
            'tag_slug'                                  => $request->get('tag_slug'),
            'tag_description'                           => $request->get('tag_description'),
        ]);
        $tag->save();
        return $this->sendResponse(TagsResource::collection($tag), 'Tag created successfully.');    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tag = Tags::find($id);
        return $this->sendResponse(TagsResource::collection($tag), 'Tag retrieved successfully.');
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
        $tag = Tags::find($id);
        $tag->update($request->all());
        return $this->sendResponse(new TagsResource($tag), 'Tag updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tags::find($id);
        $tag->delete();
        return $this->sendResponse([], 'Tag deleted successfully.');
    }
}
