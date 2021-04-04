<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Users_description extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'social_security',
        'birthdate',
        'phone_number',
        'image',
        'type_of_person',
        'user_id',

    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    

}
