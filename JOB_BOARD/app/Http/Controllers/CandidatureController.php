<?php

namespace App\Http\Controllers;

use App\candidature;
use App\Advertisements;

class CandidatureController extends Controller
{

  public function form()
    {
        return view('advertisements');
    }


  public function creation(){
    // request()->validate([
    //   'lastname' => ['required', 'string'],
    //   'firstname' => ['required', 'string'],
    //   'email' => ['required', 'email'],
    //   // 'phone' => ['integer'],

    
    // ]);
    
    $candidature = candidature::create([
      'lastname' => request('lastname'),
      'firstname' => request('firstname'),
      'email' => request('email'),
      'phone' => request('phone'),
      'cv' => request('cv'),
      'message' => request('message'),
    ]);
    
    flash("Candidature envoyé !")->success();

    $advertisements = Advertisements::all();
     
     return view('advertisements', [
         'advertisements' => $advertisements
     ]);

  }
}