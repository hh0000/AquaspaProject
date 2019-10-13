<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Servicio;

class ServicioController extends Controller
{
    public function verPlanes(){
        $data = Servicio::all();
        $datos = array("servicio"=>$data);
        return view('admin.verPlanes',$datos);
    }

    public function index(){

    }

    public function guardar(Request $request){
        $datos = $request->all();
        Servicio::create([
            "idServicio"=> $datos["idServicio"],
            "nombreServicio"=> $datos["nombreServicio"],
            "cantidadSesiones"=> $datos["cantidadSesiones"],
            "minutosSesiones"=> $datos["minutosSesiones"],
            "tipoServicio"=> $datos["tipoServicio"],
            "costoServicio"=> $datos["costoServicio"],
            "descripcion"=> $datos["descripcion"]
        ]);
        return redirect("/verPlanes");
    }
}
