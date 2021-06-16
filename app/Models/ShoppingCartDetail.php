<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCartDetail extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'price', 
        'quantity', 
        'shopping_cart_id',
        'product_id',

    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public static function  findOrCreateBySessionId($shopping_cart_id)
    if($shopping_cart_id){
        return ShoppingCart::find($shopping_cart_id)
    }
    else{
        return ShoppingCart::create();
    }
}
