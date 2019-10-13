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

Route::get('/ingresoPacientes', 'HomeController@ingresoPacientes')->name('ingresoPacientes');


Route::get('/ingresoPlanes', 'HomeController@ingresoPlanes')->name('ingresoPlanes');
Route::get('/verPlanes', 'HomeController@verPlanes')->name('verPlanes');
Route::post('/servicio/guardar', 'ServicioController@guardar');

Route::get('/verPlanes', 'ServicioController@verPlanes');





Route::get('/modificacionAlumnos', 'HomeController@modificacionAlumnos')->name('modificacionAlumnos');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/reporteProductos', 'HomeController@test')->name('test');
Route::get('/reporteVentas', 'HomeController@ventas')->name('test');
Route::get('/mail', 'HomeController@mail')->name('mail');
Route::get('/informePeriodo/{fechainicio?}/{fechafin?}', 'HomeController@informePeriodo')->name('informePeriodo');
Route::post('/ws','HomeController@servicioWeb');
Route::get('/informePeriodoTOP/{fechainicio?}/{fechafin?}/{valores?}', 'HomeController@informePeriodoTOP')->name('informePeriodoTOP');
