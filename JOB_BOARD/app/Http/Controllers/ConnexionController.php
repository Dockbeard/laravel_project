<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function form(){
        
        return view('connexion');
    }
    
    public function traitement(){
        
        request()->validate([
          'email' => ['required', 'email'],
          'password' => ['required', 'min:8'],
          [
            'password.min' => 'Pour des raisons de sécurité, votre mot de passe doit faire au minimum :min caractères.']
          ]);
        
        $resultat = auth()->attempt([
          'email' => request('email'),
          'password' => request('password'),
        ]);

       if ($resultat){
         
        flash("Vous étes maintenant connecté.")->success();

         return redirect("/account");
       }
       return back()->withInput()->withErrors([
         'email' => 'Vos identifiants sont incorrects.',
       ]);
       
    }
}