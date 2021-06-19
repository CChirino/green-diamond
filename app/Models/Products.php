<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Products extends Model
{
    use HasFactory,SoftDeletes;

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
        'categories_id'
    ];

    public function categories()
    {
        return $this->belongsToMany(Categories::class);
    }

    // public function categories()
    // {
    //     return $this->hasMany(Categories::class);
    // }
}
