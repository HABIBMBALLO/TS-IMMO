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
    return view('welcome');
});


Route::get('/type', [TypeProprieteController::class,'index']);
Route::get('/type', [TypeProprieteController::class,'index'])->name('typepropriete.index');
Route::get('/type/create', [TypeProprieteController::class,'create'])->name('typepropriete.create');
Route::post('/type/store', [TypeProprieteController::class,'store'])->name('typepropriete.store');
Route::post('/type/edit/{id}','TypeProprieteController@edit')->name('typepropriete.edit');
Route::get('/type/edit/{id}','TypeProprieteController@destroy')->name('typepropriete.destroy');


Route::get('/propriete', [ProprieteController::class,'index']);
Route::get('/propriete', [ProprieteController::class,'index'])->name('propriete.index');
Route::get('/propriete/create', [ProprieteController::class,'create'])->name('propriete.create');
Route::post('/propriete/store', [ProprieteController::class,'store'])->name('propriete.store');
Route::post('/propriete/edit/{id}','ProprieteController@edit')->name('propriete.edit');
Route::get('/propriete/edit/{id}','ProprieteController@destroy')->name('propriete.destroy');



Route::get('/commune', [CommuneController::class,'index']);
Route::get('/commune', [CommuneController::class,'index'])->name('commune.index');
Route::get('/commune/create', [CommuneController::class,'create'])->name('commune.create');
Route::post('/commune/store', [CommuneController::class,'store'])->name('commune.store');
Route::post('/commune/edit/{id}','CommuneController@edit')->name('commune.edit');
Route::get('/commune/edit/{id}','CommuneController@destroy')->name('commune.destroy');


Route::get('/quartier', [QuartierController::class,'index']);
Route::get('/quartier', [QuartierController::class,'index'])->name('quartier.index');
Route::get('/quartier/create', [QuartierController::class,'create'])->name('quartier.create');
Route::post('/quartier/store', [QuartierController::class,'store'])->name('quartier.store');
Route::post('/quartier/edit/{id}','QuartierController@edit')->name('quartier.edit');
Route::get('/quartier/edit/{id}','QuartierController@destroy')->name('quartier.destroy');


Route::get('/proprietaire', [ProprietairesController::class,'index']);
Route::get('/proprietaire/create', [ProprietairesController::class,'index'])->name('proprietaire.index');
Route::get('/proprietaire/create', [ProprietairesController::class,'create'])->name('proprietaire.create');
Route::post('/proprietaire/store', [ProprietairesController::class,'store'])->name('proprietaire.store');
Route::post('/proprietaire/edit/{id}','ProprietairesController@edit')->name('proprietaire.edit');
Route::get('/proprietaire/edit/{id}','ProprietairesController@destroy')->name('proprietaire.destroy');