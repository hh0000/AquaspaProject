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

        $datosValidacion = $request->validate([
            'nombreServicio' => 'required',
            'minutosServicio' => 'required | numeric',
            'costoServicio' => 'required | numeric',
            'descripcion' => 'required | max: 1000'
        ]);

        $datos = $request->all();
        Servicio::create([            
            "nombreServicio"=> $datos["nombreServicio"],
            "minutosServicio"=> $datos["minutosServicio"],
            "costoServicio"=> $datos["costoServicio"],  
            "descripcion"=> $datos["descripcion"],
            
        ]);
        return redirect("/verServicios")->with('mensaje','Servicio agregado correctamente!');
    }

    public function modificacionServicio($idServicio){
        $datos = Servicio::findOrFail($idServicio);
        return view('admin.modificacionServicio',compact('datos'));
    }

    public function modificacion(Request $request, $idServicio){
        $datos = Servicio::findOrFail($idServicio);
        $datos->nombreServicio = $request->nombreServicio;
        $datos->minutosServicio = $request->minutosServicio;
        $datos->costoServicio = $request->costoServicio;
        $datos->descripcion = $request->descripcion;

        $datos->save();

        return redirect("/verServicios")->with('mensaje','Servicio modificado correctamente');
    }

    public function eliminar($idServicio){
        $data = Servicio::find($idServicio);
        $data->delete();
        return redirect("/verServicios")->with('mensaje','Servicio eliminado correctamente');

    }
}
