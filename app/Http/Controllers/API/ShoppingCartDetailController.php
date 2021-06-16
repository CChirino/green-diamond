<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\ShoppingCartDetail;
use Illuminate\Http\Request;

class ShoppingCartDetailController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, Product $product)
    {
        $product = Product::find($request->product_id);
        $shopping_cart = ShoppingCart::get_the_session_shopping_cart();
        $shopping_cart->my_store($product,$request);
        return back();

    }

    public function store_product(Product $product)
    {
        $shopping_cart = ShoppingCart::get_the_session_shopping_cart();
        $shopping_cart->store_product($product);
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShoppingCartDetail  $shoppingCartDetail
     * @return \Illuminate\Http\Response
     */
    public function show(ShoppingCartDetail $shoppingCartDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShoppingCartDetail  $shoppingCartDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(ShoppingCartDetail $shoppingCartDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShoppingCartDetail  $shoppingCartDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShoppingCartDetail $shoppingCartDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShoppingCartDetail  $shoppingCartDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShoppingCartDetail $shoppingCartDetail)
    {
        $shoppingCartDetail->delete();
        return back();
    }
}
