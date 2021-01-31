<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permissions extends Model
{
    use HasFactory, SoftDeletes;

        protected $fillable = [
        'name', 'slug', 'description',
    ];

    public function roles(){
        return $this->belongsToMany('App\Models\Roles')->withTimesTamps();
    }
}
