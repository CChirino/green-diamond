<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;
use App\Models\Image;
use App\Models\Thumbnail;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\Categories as CategoryResource;
use App\Http\Resources\Products as ProductsResource;
use App\Http\Resources\ProductCollection;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;



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
                            ->select('products.*','categories.name')
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
            'title' => 'required',
            'is_featured' => 'required',
            'is_hot' => 'required',
            'price' => 'required',
            'sale_price' => 'required',
            'is_out_of_stock' => 'required',
            'depot' =>'required',
            'inventory' =>'required',
            'is_active' =>'required',
            'is_sale' =>'required',
            'categories_id' =>'categories_id',

        ]);

        $products = new Products();
        $products->title = $request->title;
        $products->is_featured = $request->is_featured;
        $products->is_hot = $request->is_hot;
        $products->price = $request->price;
        $products->sale_price = $request->sale_price;
        $products->is_out_of_stock = $request->is_out_of_stock;
        $products->depot = $request->depot;
        $products->inventory = $request->inventory;
        $products->is_active = $request->is_active;
        $products->is_sale = $request->is_sale;
        if ($request->hasFile('images')) {
            $filenameWithExt = $request->file('images')->getClientOriginalName ();// Get Filename
            $fileNameToStore = $filenameWithExt;// Upload Image
            $path = $request->file('images')->move('storage/products', $fileNameToStore,'public');
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
            'title' => 'required',
            'is_featured' => 'required',
            'is_hot' => 'required',
            'price' => 'required',
            'sale_price' => 'required',
            'is_out_of_stock' => 'required',
            'depot' =>'required',
            'inventory' =>'required',
            'is_active' =>'required',
            'is_sale' =>'required',
            'categories_id' =>'categories_id',
        ]);

        
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        if($request->hasFile('images')){
            $filename = $request->images->getClientOriginalName();
            $products->update([
                'title'                                             => $request->title,
                'is_featured'                                       => $request->is_featured,
                'is_hot'                                            => $request->is_hot,
                'price'                                             => $request->price,
                'sale_price'                                        => $request->sale_price,
                'depot'                                             => $request->depot,
                'inventory'                                         => $request->inventory,
                'is_active'                                         => $request->is_active,
                'is_sale'                                           => $request->is_sale,
                'categories_id'                                     => $request->categories_id,
                'images'                                            => $request->images->storeAs('storage/products',$filename,'public'),
            ]);
        }
        else{
            $products->update([
                'title'                              => $request->title,
                'is_featured'                              => $request->is_featured,
                'is_hot'                                     => $request->is_hot,
                'price'                                  => $request->price,
                'sale_price'                               => $request->sale_price,
                'depot'                                     => $request->depot,
                'inventory'                                     => $request->inventory,
                'is_active'                                     => $request->is_active,
                'is_sale'                                     => $request->is_sale,
                'categories_id'                                     => $request->categories_id,
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

    public function index_client()
    {
        $products = Products::with('categories','images','thumbnail')->get();
        $productCollection = new ProductCollection($products);
        return response()->json($productCollection);


    }

    public function index_products_categories()
    {
        $category = Categories::with('products','products.images','products.thumbnail')->get();
        $productCollection = new ProductCollection($category);
        return response()->json($productCollection);


    }

    public function products_count()
    {
        $products = DB::table('products')
                            ->whereNull('products.deleted_at')
                            ->select('products.*')
                            ->get()
                            ->count();
        return $products;
    }

    public function collection()
    {
        $category = Categories::with('products','products.images','products.thumbnail')->get();
        $productCollection = new ProductCollection($category);
        return response()->json($productCollection);

    }
}
