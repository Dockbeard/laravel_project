<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;

class AccountController extends Controller
{
  public function accueil(){

    $users = auth()->user();
        
    if (auth()->guest()) {
      
      flash("Vous devez être connecté pour voir cette page.")->error();
      
      return redirect('/connexion');
    }

    return view('account', [
        'users' => $users,
        ]);
    
   
  }
  
  public function deconnexion(){
    
    auth()->logout();
    
    flash("Vous êtes maintenant déconnecté.")->success();
    
    return redirect('/');
    
  }
  
  public function passwordModification() {
    
    if (auth()->guest()) {
      flash("Vous devez être connecté pour voir cette page.")->error();
      
      return redirect('/connexion');
    }
    
    request()->validate([
      'password' => ['required', 'confirmed', 'min:8'],
      'password_confirmation' => ['required'],
    ]);

    auth()->user()->update([
      'lastname' => request('lastname'),
      'firstname' => request('firstname'),
      'email' => request('email'),
      'phone' => request('phone'),
      'password' =>bcrypt(request('password')),
    ]);
    
    flash("Votre mot de passe a bien été mise à jour.")->success();

    return redirect('/account');
  }

}