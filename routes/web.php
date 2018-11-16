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

route::get('/prueba',function(){
	echo "hola mundo";
});

route::get('/nosotros',function(){
	return view('nosotros');
});

route::get('/algoritmo',function(){
	return view('algoritmo');
});

route::get('/ayuda',function(){
	return view('ayuda');
});

route::get('/contacto',function(){
	return view('ayuda');
});

route::get('/user',function(){
	return view('usuario1');
});

route::get('/pronostico','SymptomController@pronostico');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('sintomas','SymptomController');
Route::resource('enfermedades','DiseaseController');
