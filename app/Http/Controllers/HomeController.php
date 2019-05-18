<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Venta;

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
        return view('home');
    }
public function test(){
    //SE PASAN TODOS LOS DATOS DE LA TABLA PRODUCTOS A LA VISTA MEDIANTE LA VARIABLE DATOS
    $data = Producto::all();
    $datos = array("productos"=>$data);
 return view('admin.reporteProductos',$datos);
 
}

public function ventas(){
    //SE PASAN TODOS LOS DATOS DE LA TABLA PRODUCTOS A LA VISTA MEDIANTE LA VARIABLE DATOS
    $data = Venta::all();
    $datos = array("ventas"=>$data);
 return view('admin.reporteVentas',$datos);
 
}

public function servicioWeb(){
    $data = Venta::all();
    return json_encode($data);
}


public function informePeriodo($fechainicio=null,$fechafin=null){
    //Si las fechas son nulas, muestra las ventas del dia..
    $data = null;
    $datos = null;

if($fechainicio==null && $fechafin==null){
$data = Venta::where('fechadate','>=',now())->get();
$datos = array("ventas"=>$data);
}else{
    //Se realiza el formato de las fecha, para mostrar en el header de la página
    $finit = substr($fechainicio,4,7)."-".substr($fechainicio,2,2)."-".substr($fechainicio,0,2);
    $ftert = substr($fechafin,4,7)."-".substr($fechafin,2,2)."-".substr($fechafin,0,2);
    $finit2 = substr($fechainicio,0,2)."-".substr($fechainicio,2,2)."-".substr($fechainicio,4,7);
    $fter2 = substr($fechafin,0,2)."-".substr($fechafin,2,2)."-".substr($fechafin,4,7);

$data = Venta::where('fechadate','>=',$finit)->where('fechadate','<=',$ftert)->get();
$datos = array("ventas"=>$data,"fini" => $finit2,"fter" => $fter2);
}

 return view('admin.informePeriodo',$datos);

}


public function mail(){
    return view('admin.mail');   

   }

}
