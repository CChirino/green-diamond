<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Http\Resources\Products as ProductsResource;

class ProductsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();        
        $products = Products::paginate(7);
        return $this->sendResponse(ProductsResource::collection($products), 'Products retrieved successfully.');
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
            'product_name' => 'required',
            'product_slug' => 'required',
            'price' => 'required',
            'discount_rate' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'state' => 'required',
            'image' => 'required',
            'minimum_stock' => 'required',
            'maximum_stock' => 'required',
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        $products = new Products([
            'product_name'                                  => $request->get('product_name'),
            'product_slug'                                  => $request->get('product_slug'),
            'price'                                         => $request->get('price'),
            'discount_rate'                                 => $request->get('discount_rate'),
            'short_description'                             => $request->get('short_description'),
            'long_description'                              => $request->get('long_description'),
            'state'                                         => $request->get('state'),
            'image'                                         => $request->get('image'),
            'minimum_stock'                                 => $request->get('minimum_stock'),
            'maximum_stock'                                 => $request->get('maximum_stock'),
            ]);
        $products->save();

        return $this->sendResponse(new ProductsResource($products), 'Products created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Products::find($id);
  
        if (is_null($products)) {
            return $this->sendError('Product not found.');
        }

        return $this->sendResponse(new ProductsResource($products), 'Product retrieved successfully.');

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
        $input = $request->all();
        $products = Products::find($id);
        $validator = Validator::make($input, [
            'product_name' => 'required',
            'product_slug' => 'required',
            'price' => 'required',
            'discount_rate' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'state' => 'required',
            'image' => 'required',
            'minimum_stock' => 'required',
            'maximum_stock' => 'required',
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $products->update($request->all());
        return $this->sendResponse(new ProductsResource($products), 'Product updated successfully.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Products::find($id);
        $products->delete();
        return $this->sendResponse([], 'Product deleted successfully.');
    }
}
