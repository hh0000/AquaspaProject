<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
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
        return redirect("/verProfesional")->with('mensaje','Profesional creado correctamente!');
    }

    public function modificacionProfesional($idProfesional){
        $datos = Profesional::findOrFail($idProfesional);
        return view('admin.modificacionProfesional', compact('datos'));
    }
    
    public function modificacion(Request $request, $idProfesional){
        $datos = Profesional::findOrFail($idProfesional);
        $datos->nombreProfesional = $request->nombreProfesional;
        $datos->rutProfesional = $request->rutProfesional;
        $datos->telefonoProfesional = $request->telefonoProfesional;

        $datos->save();

        return redirect("/verProfesional")->with('mensaje','Profesional modificado correctamente');
    }


    public function eliminar($idProfesional){
        $data = Profesional::find($idProfesional);
        $data->delete();
        return redirect("/verProfesional")->with('mensaje','Profesional eliminado correctamente');

    }


}
