<?php

namespace App\Http\Controllers;

use App\users;

class UsersController extends Controller
{
    public function listing(){
        
        $users = users::all();
        
        return view('users', [
        'users' => $users,
        ]);
    }

    public function delete(){
        
        $user = auth()->user()->delete();

            return view('connexion');
    }
}