<?php

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

route::view('/nosotros','nosotros');

route::view('/algoritmo','algoritmo');

route::view('/ayuda','ayuda');

route::view('/contacto','ayuda');

route::view('/user','usuario1');

route::get('/pronostico','SymptomController@pronostico')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('sintomas','SymptomController');
Route::resource('enfermedades','DiseaseController');
