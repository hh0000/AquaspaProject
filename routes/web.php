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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/reporteProductos', 'HomeController@test')->name('test');
Route::get('/reporteVentas', 'HomeController@ventas')->name('test');
Route::get('/mail', 'HomeController@mail')->name('mail');
Route::get('/informePeriodo/{fechainicio?}/{fechafin?}', 'HomeController@informePeriodo')->name('informePeriodo');
