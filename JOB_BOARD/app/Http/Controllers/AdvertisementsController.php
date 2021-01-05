<?php

namespace App\Http\Controllers;

use App\Advertisements;

class AdvertisementsController extends Controller
{
    public function listing(){

    $advertisements = Advertisements::all();
     
     return view('advertisements', [
         'advertisements' => $advertisements
     ]);

    }
}