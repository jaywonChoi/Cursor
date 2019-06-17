<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
      public static $rules =[
        'uid'=>'required|unique:users',
        'email'=> 'email|required',
        'password'=>'required|min:4',
        'firstname'=>'required',
        'lastname'=>'required',
        'sex'=>'required'
    ];

    protected $fillable = [
         'uid','email', 'password','firstname','lastname','sex'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


}
