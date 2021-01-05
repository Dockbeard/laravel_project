<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\AdvertisementsController@listing');

Route::get('/advertisements', 'AdvertisementsController@listing');

Route::get('/inscription', 'App\Http\Controllers\InscriptionController@form');

Route::get('/candidature', 'App\Http\Controllers\CandidatureController@form');

Route::get('/connexion', 'App\Http\Controllers\ConnexionController@form' );

Route::post('/connexion', 'App\Http\Controllers\ConnexionController@traitement' );

Route::post('/inscription', 'App\Http\Controllers\InscriptionController@creation' );

Route::post('/candidature', 'App\Http\Controllers\CandidatureController@creation' );

Route::get('/users', 'App\Http\Controllers\UsersController@listing');

Route::get('/delete', 'App\Http\Controllers\UsersController@delete');

Route::get('/account', 'App\Http\Controllers\AccountController@accueil');

Route::post('/account', 'App\Http\Controllers\AccountController@passwordModification' );

Route::get('/deconnexion', 'App\Http\Controllers\AccountController@deconnexion');

Route::post('/passwordModification', 'AccountController@passwordModification');