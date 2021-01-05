<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidature extends Model {

    protected $fillable = ['email', 'firstname', 'lastname', 'phone', 'password'];

}