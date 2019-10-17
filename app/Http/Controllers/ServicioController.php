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
            "idServicio"=> $datos["idServicio"],
            "nombreServicio"=> $datos["nombreServicio"],
            "descripcion"=> $datos["descripcion"],
            "costoServicio"=> $datos["costoServicio"],  
        ]);
        return redirect("/verServicios");
    }
}
