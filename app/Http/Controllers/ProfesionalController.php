<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profesional;

class ProfesionalController extends Controller
{
    public function verProfesional(){
        $data = Profesional::all();
        $datos = array("profesional"=>$data);
        return view('admin.verProfesional',$datos);
    }

    public function index(){

    }

    public function guardar(Request $request){

        $datosValidacion = $request->validate([
            'nombreProfesional'=>'required',
            'rutProfesional'=>'required',
            'telefonoProfesional'=>'required | numeric'
        ]);

        $datos = $request->all();
        Profesional::create([            
            "nombreProfesional"=> $datos["nombreProfesional"],
            "rutProfesional"=> $datos["rutProfesional"],
            "telefonoProfesional"=> $datos["telefonoProfesional"],            
            
        ]);
        return redirect("/verProfesional");
    }

    public function eliminar($idProfesional){
        $data = Profesional::find($idProfesional);
        $data->delete();
        return redirect("/verProfesional");

    }


}
