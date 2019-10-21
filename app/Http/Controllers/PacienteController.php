<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Paciente;
use App\Http\Controllers\Flash;


class PacienteController extends Controller
{
    public function verPaciente(){
        $data = Paciente::all();
        $datos = array("paciente"=>$data);
        return view('admin.verPaciente',$datos);
    }

    public function index(){

    }

    public function guardar(Request $request){
        $datos = $request->all();
        Paciente::create([
            "nombrePaciente"=> $datos["nombrePaciente"],
            "rutPaciente"=> $datos["rutPaciente"],
            "fechaNacPaciente"=> $datos["fechaNacPaciente"],
            "emailPaciente"=> $datos["emailPaciente"],  
            "profesionPaciente"=> $datos["profesionPaciente"], 
            "tel_emergenciaPaciente"=> $datos["tel_emergenciaPaciente"], 
            "telefonoPaciente"=> $datos["telefonoPaciente"], 
            "direccionPaciente"=> $datos["direccionPaciente"], 
            "comentarios"=> $datos["comentarios"], 
        ]);
        return redirect("/verPaciente");
    }

    public function eliminar($idPaciente){
        $data = Paciente::find($idPaciente);
        $data->delete();

        //flash::warning('El usuario a sido borrado de forma exitosa!');
        return redirect("/verPaciente");
    }
}
