<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Categories;
use App\Models\Products;



class Categories extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'categories';

    protected $fillable = [
        'name', 'slug', 
      ];

      public function products()
      {
          return $this->hasMany(Products::class,'product_id');
      }


}
