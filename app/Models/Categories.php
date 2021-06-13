<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Categories extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'category_name', 'category_slug', 'category_description', 
      ];

      public function products()
      {
          return $this->belongsTo(Products::class,'categories_id');
      }
}
