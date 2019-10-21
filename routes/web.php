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
Route::post('/paciente/guardar', 'PacienteController@guardar');
Route::get('/verPaciente', 'HomeController@verPaciente')->name('verPaciente');
Route::get('/verPaciente', 'PacienteController@verPaciente');
Route::group(['prefix' => 'paciente'], function(){
    Route::resource('paciente','PacienteController');
    Route::get('verPaciente/{idPaciente}',[
        'uses' => 'PacienteController@eliminar',
        'as'   => 'eliminarPaciente'
    ]);
});



Route::get('/ingresoServicios', 'HomeController@ingresoServicios')->name('ingresoServicios');
Route::post('/servicio/guardar', 'ServicioController@guardar');
Route::get('/verServicios', 'HomeController@verServicios')->name('verServicios');
Route::get('/verServicios', 'ServicioController@verServicios');

Route::get('/ingresoProfesional', 'HomeController@ingresoProfesional')->name('ingresoProfesional');
Route::post('/profesional/guardar', 'ProfesionalController@guardar');
Route::get('/verProfesional', 'HomeController@verProfesional')->name('verProfesional');
Route::get('/verProfesional', 'ProfesionalController@verProfesional');


//Route::get('/ingresoPlanes', 'HomeController@ingresoPlanes')->name('ingresoPlanes');
//Route::post('/plan/guardar', 'PlanController@guardar');
//Route::get('/verPlanes', 'HomeController@verPlanes')->name('verPlanes');
//Route::get('/verPlanes', 'PlanController@verPlanes');



//Route::get('/modificacionAlumnos', 'HomeController@modificacionAlumnos')->name('modificacionAlumnos');
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/reporteProductos', 'HomeController@test')->name('test');
//Route::get('/reporteVentas', 'HomeController@ventas')->name('test');
//Route::get('/mail', 'HomeController@mail')->name('mail');
//Route::get('/informePeriodo/{fechainicio?}/{fechafin?}', 'HomeController@informePeriodo')->name('informePeriodo');
//Route::post('/ws','HomeController@servicioWeb');
//Route::get('/informePeriodoTOP/{fechainicio?}/{fechafin?}/{valores?}', 'HomeController@informePeriodoTOP')->name('informePeriodoTOP');