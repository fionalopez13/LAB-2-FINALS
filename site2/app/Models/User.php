<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    public $timestamps = false;

    protected $table = 'tble_site2';

    protected $fillable = [
        'username', 'password', 'gender'
    ];

    protected $hidden =[
        "password"
    ];
}