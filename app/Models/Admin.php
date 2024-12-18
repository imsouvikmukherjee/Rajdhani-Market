<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'admins';

    // Add any additional fields or configurations as needed

    protected $fillable = [
       'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
