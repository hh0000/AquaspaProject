<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Venta;
use App\Profesional;
use App\Servicio;
use App\Paciente;
use App\Evento;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $servicios = Servicio::all();
        return view('home', compact("servicios"));
    }

    //ingresos
    public function ingresoPacientes(){
        return view('admin.ingresoPacientes');
    }

    public function ingresoServicios(){
        return view('admin.ingresoServicios');
    }


    public function ingresoProfesional(){
        return view('admin.ingresoProfesional');
    }

    public function ingresoVentas(){
        $profesionales = Profesional::all();
        $servicios = Servicio::all();
        $pacientes = Paciente::all();
        return view('admin.ingresoVentas', compact('profesionales', 'servicios', 'pacientes'));
    }
    //reportes
    public function verServicios(){
        return view('admin.verServicios');
    }

    public function verPaciente(){
        return view('admin.verPaciente');
    }

    public function verProfesional(){
        return view('admin.verProfesional');
    }

    public function verVentas(){
        return view('admin.verVentas');
    }

    //editar
    public function modificacionPaciente(){
        return view('admin.modificacionPaciente');
    }}