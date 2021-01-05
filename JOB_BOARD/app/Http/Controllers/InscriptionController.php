<?php

namespace App\Http\Controllers;

use App\Users;

class InscriptionController extends Controller
{

  public function form()
    {
        return view('inscription');
    }

  public function creation(){
    request()->validate([
      'lastname' => ['required', 'string'],
      'firstname' => ['required', 'string'],
      'email' => ['required', 'email'],
      // 'phone' => ['integer'],
      'password' => ['required', 'confirmed', 'min:8'],
      'password_confirmation' => ['required'],
    
    ], [
      'password.min' => 'Pour des raisons de sécurité, votre mot de passe doit faire au minimum :min caractères.'
    ]);
    
    $inscription = users::create([
      'lastname' => request('lastname'),
      'firstname' => request('firstname'),
      'email' => request('email'),
      'phone' => request('phone'),
      'password' => bcrypt(request('password')),
      'password_confirmation' => request('password_confirmation'),
    ]);
    
    return view('connexion');
    
  }
}