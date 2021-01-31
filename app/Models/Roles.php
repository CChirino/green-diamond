<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Roles extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'description', 'full-access',
    ];

    public function users(){
        return $this->belongsToMany('App\Models\User')->withTimesTamps();
    }

    public function permissions(){
        return $this->belongsToMany('App\Models\Permissions')->withTimesTamps();
    }
}
