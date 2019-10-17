<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Plan;

class PlanController extends Controller
{
    public function verPlanes(){
        $data = Plan::all();
        $datos = array("plan"=>$data);
        return view('admin.verPlanes',$datos);
    }

    public function index(){

    }

    public function guardar(Request $request){
        $datos = $request->all();
        Plan::create([
            "idPlan"=> $datos["idPlan"],
            "nombrePlan"=> $datos["nombrePlan"],
            "cantidadSesiones"=> $datos["cantidadSesiones"],
            "minutosSesiones"=> $datos["minutosSesiones"],
            "tipoServicio"=> $datos["tipoServicio"],
            "costoPlan"=> $datos["costoPlan"],
            "descripcion"=> $datos["descripcion"]
        ]);
        return redirect("/verPlanes");
    }
}
