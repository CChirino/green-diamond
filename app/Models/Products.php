<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Categories;
use App\Models\Products;



class Products extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'products';


    protected $fillable = [
        'title', 
        'is_featured', 
        'is_hot',
        'price', 
        'sale_price',
        'is_out_of_stock',
        'depot',
        'inventory',
        'is_active',
        'is_sale',
        'images',
        'product_id'
    ];

    public function categories()
    {
        return $this->belongsTo(Categories::class,'product_id');
    }
    
}
