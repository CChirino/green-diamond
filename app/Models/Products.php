<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Products extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'product_name', 
        'product_slug', 
        'discount_rate',
        'price', 
        'quantity',
        'sku',
        'file',
        'description',
        'categories_id'
    ];

    public function categories()
    {
        return $this->hasMany(Categories::class);
    }
}
