<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;
use App\Http\Resources\Categories as CategoryResource;
use App\Http\Resources\Products as ProductsResource;
use Illuminate\Support\Facades\Gate;





class CategoryController extends BaseController
{
                /**
    * @OA\Get(
    *     path="/api/admin/categories",
    *     summary="Mostrar categorias",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos las categorias."
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
        $products = Categories::with(['products']);
        return  CategoryResource::collection($products->paginate(10))->response();
        // $category = Categories::all();
        // return $this->sendResponse(CategoryResource::collection($category), 'Category retrieved successfully.');
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
            'name'=> 'required',
            'slug'=> 'required',

        ]);

        $category = new Categories([
            'name'                                  => $request->get('name'),
            'slug'                                  => $request->get('slug'),
        ]);
        $category->save();
        return $this->sendResponse(CategoryResource::collection($category), 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Categories::find($id);
        return $this->sendResponse(CategoryResource::collection($category), 'Category retrieved successfully.');
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
        $category = Categories::find($id);
        $category->update($request->all());
        return $this->sendResponse(new CategoryResource($category), 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Categories::find($id);
        $category->delete();
        return $this->sendResponse([], 'Category deleted successfully.');

    }
}
