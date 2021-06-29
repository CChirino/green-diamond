<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Products;


class Image extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'images';


    protected $fillable = [
        'name', 
        'url', 
    ];


    public function products()
    {
        return $this->hasMany(Products::class,'image_id');
    }
}
