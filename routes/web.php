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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home','HomeController@index');

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

Route::get('/modificacionPaciente/{idPaciente}', 'PacienteController@modificacionPaciente')->name('modificacionPaciente');
Route::put('/modificacion/{idPaciente}','PacienteController@modificacion')->name('paciente.modificacion');

Route::get('/ingresoServicios', 'HomeController@ingresoServicios')->name('ingresoServicios');
Route::post('/servicio/guardar', 'ServicioController@guardar');
Route::get('/verServicios', 'HomeController@verServicios')->name('verServicios');
Route::get('/verServicios', 'ServicioController@verServicios');

//Eventos
Route::post('/guardarServicio', 'HomeController@guardarServicio')->name('guardarServicio');
Route::get('/leerEvento', 'HomeController@leerEvento')->name('leerEvento');
//FinEventos

Route::group(['prefix' => 'servicio'], function(){
    Route::resource('servicio','ServicioController');
    Route::get('verServicio/{idServicio}',[
        'uses' => 'ServicioController@eliminar',
        'as'   => 'eliminarServicio'
    ]);
});
Route::get('/modificacionServicio/{idServicio}', 'ServicioController@modificacionServicio')->name('modificacionServicio');
Route::put('/modificacionServi/{idServicio}','ServicioController@modificacion')->name('servicio.modificacion');

Route::get('/ingresoProfesional', 'HomeController@ingresoProfesional')->name('ingresoProfesional');
Route::post('/profesional/guardar', 'ProfesionalController@guardar');
Route::get('/verProfesional', 'HomeController@verProfesional')->name('verProfesional');
Route::get('/verProfesional', 'ProfesionalController@verProfesional');
Route::group(['prefix' => 'profesional'], function(){
    Route::resource('profesional','ProfesionalController');
    Route::get('verProfesional/{idProfesional}',[
        'uses' => 'ProfesionalController@eliminar',
        'as'   => 'eliminarProfesional'
    ]);
});
Route::get('/modificacionProfesional/{idProfesional}', 'ProfesionalController@modificacionProfesional')->name('modificacionProfesional');
Route::put('/modificacionProf/{idProfesional}','ProfesionalController@modificacion')->name('profesional.modificacion');

Route::get('/ingresoVentas','HomeController@ingresoVentas')->name('ingresoVentas');
//Route::get('/ingresoVentas','ServicioController@buscar')->name('ingresoVentas');
//Route::get('/ingresoVentas','ProfesionalController@buscar')->name('ingresoVentas');
Route::get('/ingresoVentas/{idServicio}','ServicioController@buscar');
Route::get('/ingresoVentas/{idProfesional}','ProfesionalController@buscar');
Route::get('/ingresoVentas/{idPaciente}','PacienteController@buscar');

//Route::get('/ingresoPlanes', 'HomeController@ingresoPlanes')->name('ingresoPlanes');
//Route::post('/plan/guardar', 'PlanController@guardar');
//Route::get('/verPlanes', 'HomeController@verPlanes')->name('verPlanes');
//Route::get('/verPlanes', 'PlanController@verPlanes');



//Route::get('/modificacionAlumnos', 'HomeController@modificacionAlumnos')->name('modificacionAlumnos');

//Route::get('/reporteProductos', 'HomeController@test')->name('test');
//Route::get('/reporteVentas', 'HomeController@ventas')->name('test');
//Route::get('/mail', 'HomeController@mail')->name('mail');
//Route::get('/informePeriodo/{fechainicio?}/{fechafin?}', 'HomeController@informePeriodo')->name('informePeriodo');
//Route::post('/ws','HomeController@servicioWeb');
//Route::get('/informePeriodoTOP/{fechainicio?}/{fechafin?}/{valores?}', 'HomeController@informePeriodoTOP')->name('informePeriodoTOP');