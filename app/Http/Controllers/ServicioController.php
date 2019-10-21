<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Servicio;

class ServicioController extends Controller
{
    public function verServicios(){
        $data = Servicio::all();
        $datos = array("servicio"=>$data);
        return view('admin.verServicios',$datos);
    }

    public function index(){

    }

    public function guardar(Request $request){
        $datos = $request->all();
        Servicio::create([            
            "nombreServicio"=> $datos["nombreServicio"],
            "minutosServicio"=> $datos["minutosServicio"],
            "costoServicio"=> $datos["costoServicio"],  
            "descripcion"=> $datos["descripcion"],
            
        ]);
        return redirect("/verServicios");
    }
}
