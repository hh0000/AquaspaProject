<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use App\Http\Controllers\Controller;
use App\Venta;

class VentaController extends Controller
{
    public function verVentas(){
        $data = Venta::all();
        $datos = array("venta"=>$data);
        return view("admin.verVentas",$datos);
    }

    
    public function buscar(){
        $data = Venta::all();
        return view('admin.verVentas', compact('data'));
    }

    public function index(){

    }


    public function guardar(Request $request){
        

        //$datosValidacion = $request->validate([
            //'rutPaciente' => 'required',
          //  'nombrePaciente' => 'required',
            //'telefonoPaciente' => 'required',
            //'fechaVenta' => 'required',
            //'tipoServicio' => 'required',
            //'costoServicio' => 'required',
            //'nombreProfesional' => 'required',
            //'telefonoProfesional' => 'required',
            //'metodoPago' => 'required',
            //'numeroDocumento' => 'required',
            //'total' => 'required',
            //'comentarios' => 'required',
        //]);

        $datos = $request->all();
      
        Venta::create([
            "rutPaciente"=> $datos["rutPaciente"],
            "nombrePaciente"=> $datos["nombrePaciente"],
            "telefonoPaciente"=> $datos["telefonoPaciente"],
            "fechaVenta"=> $datos["fechaVenta"],
            "nombreServicio"=> $datos["nombreServicio"],
            "costoServicio"=> $datos["costoServicio"],
            "nombreProfesional"=> $datos["nombreProfesional"],
            "telefonoProfesional"=> $datos["telefonoProfesional"],
            "metodoPago"=> $datos["metodoPago"],
            "numeroDocumento"=> $datos["numeroDocumento"],
            "total"=> $datos["total"],
            "comentarios"=> $datos["comentarios"],
        ]);
        return redirect("/verVentas")->with('mensaje','Venta realizada con exito');

    }

   


    
}