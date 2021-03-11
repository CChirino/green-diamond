<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'product_name', 
        'product_slug', 
        'price', 
        'discount_rate',
        'short_description',
        'long_description',
        'state',
        'image',
        'minimum_stock',
        'maximum_stock'
    ];
}
