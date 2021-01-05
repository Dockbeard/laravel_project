<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Users extends Model implements Authenticatable {
    
    use BasicAuthenticatable;
    
    protected $fillable = ['email', 'firstname', 'lastname', 'phone', 'password'];
    
    public function getRememberTokenName()
    {
        return '';
    }
}