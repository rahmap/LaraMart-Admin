<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use AuthenticableTrait;

    protected $table = 'admins';
    protected $guard = 'admin';

    protected $fillable = [
        'name','email','password','is_active', 'role'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
