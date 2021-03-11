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

Route::resource('propietario','PropietarioController');
//Route::resource('vehiculos','VehiculoController');
Route::get('propietario/{propietario}/vehiculos','VehiculoController@index');
Route::post('propietario/{propietario}/vehiculos','VehiculoController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
