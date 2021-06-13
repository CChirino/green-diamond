<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\Products as ProductsResource;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;



class ProductsController extends BaseController
{
                    /**
    * @OA\Get(
    *     path="/api/admin/products",
    *     summary="Mostrar productos",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los productos."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')
                            ->join('categories','products.categories_id', '=','categories.id')
                            ->whereNull('products.deleted_at')
                            ->select('products.*','categories.category_name')
                            ->paginate(5);
        return $products = Response()->json($products,200);
        // return $this->sendResponse(ProductsResource::collection($products), 'Products retrieved successfully.');
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
            'product_name' => 'required',
            'product_slug' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            // 'file' => 'required',
            'sku' => 'required',
            'discount_rate' =>'required'
        ]);

        $products = new Products();
        $products->product_name = $request->product_name;
        $products->product_slug = $request->product_slug;
        $products->price = $request->price;
        $products->quantity = $request->quantity;
        $products->description = $request->description;
        $products->discount_rate = $request->discount_rate;
        $products->sku = $request->sku;
        if ($request->hasFile('file')) {
            $filenameWithExt = $request->file('file')->getClientOriginalName ();// Get Filename
            $fileNameToStore = $filenameWithExt;// Upload Image
            $path = $request->file('file')->move('storage/products', $fileNameToStore,'public');
            $products->file = $fileNameToStore;
            }
        $products->categories_id = $request->categories_id;
        $products->save();
         return $products = Response()->json($products,200);



        // $filename = $request->image->getClientOriginalName();
        // $products= Products::create([
        //       'product_name'                              => $request->product_name,
        //       'product_slug'                              => $request->product_slug,
        //       'price'                                     => $request->price,
        //       'quantity'                                  => $request->quantity,
        //       'description'                               => $request->description,
        //       'state'                                     => $request->state,
        //       'image'                                     => $request->image->storeAs('products',$filename,'public'),
        //       'stock'                                     => $request->stock,
        //       'discount_rate'                             => $request->discount_rate
        //  ]);
        //  $products->save();
        //  return $products = Response()->json($products,200);


        // if($request->hasFile('image')){
        //      $filename = $request->image->getClientOriginalName();
        //      $products= Products::create([
        //          'product_name'                              => $request->product_name,
        //          'product_slug'                              => $request->product_slug,
        //          'price'                                     => $request->price,
        //          'quantity'                                  => $request->quantity,
        //          'description'                               => $request->description,
        //          'state'                                     => $request->state,
        //          'image'                                     => $request->image->storeAs('products',$filename,'public'),
        //          'stock'                                     => $request->stock,
        //          'discount_rate'                             => $request->discount_rate
        // ]);
        //     $products->save();
        // }


 
        
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
            'quantity' => 'required',
            'description' => 'required',
            'state' => 'required',
            // 'image' => 'required',
            'minimum_stock' => 'required',
            'maximum_stock' => 'required',
        ]);

        
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $products->update([
                'product_name'                              => $request->product_name,
                'product_slug'                              => $request->product_slug,
                'price'                                     => $request->price,
                'quantity'                                  => $request->quantity,
                'description'                               => $request->description,
                'state'                                     => $request->state,
                // 'image'                                     => $request->image->storeAs('products',$filename,'public'),
                // 'stock'                                     => $request->stock,
                'discount_rate'                             => $request->discount_rate
            ]);
        }
        else{
            $products->update([
                'product_name'                              => $request->product_name,
                'product_slug'                              => $request->product_slug,
                'price'                                     => $request->price,
                'quantity'                                  => $request->quantity,
                'description'                               => $request->description,
                'state'                                     => $request->state,
                // 'stock'                                     => $request->stock,
                'discount_rate'                             => $request->discount_rate
            ]);
        }
        return $this->sendResponse(new ProductsResource($request), 'Product updated successfully.');


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
