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

Route::get('/', function () {
    return view('accueil');
});

Route::resource('inscription', 'InscriptionController');

Route::resource('proprietaire', 'ProprietaireController');
Route::resource('vehicule', 'VehiculeController');
Route::resource('conducteur', 'ConducteurController');
Route::resource('passager', 'PassagerController');
Route::resource('commander', 'CommanderController');

Route::get('inscription', 'InscriptionController@index')->name('inscription.index');
Route::get('commander', 'CommanderController@index')->name('commander.index');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
