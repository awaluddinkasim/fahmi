<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $fillable = [
        'nama',
        'username',
        'password',
        'no_hp',
        'role',
    ];
}
