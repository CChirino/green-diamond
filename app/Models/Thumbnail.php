<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Products;


class Thumbnail extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'thumbnails';


    protected $fillable = [
        'name', 
        'url', 
    ];

    public function products()
    {
        return $this->hasMany(Products::class,'thumbnail_id');
    }
}
