<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Venta;
use Illuminate\Support\Facades\DB;

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

    public function ingresoAlumnos(){
        return view('admin.ingresoAlumnos');
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

public function informePeriodoTOP($fechainicio=null,$fechafin=null,$valores=null){
  //Si las fechas son nulas, muestra las ventas del dia..
  $data = null;
  $datos = null;

if($fechainicio==null && $fechafin==null){
$data = Venta::where('fechadate','>=',now())->get();
$datos = array("ventas"=>$data, "valor"=>"");
}else{
    $finit = substr($fechainicio,4,7)."-".substr($fechainicio,2,2)."-".substr($fechainicio,0,2);
    $ftert = substr($fechafin,4,7)."-".substr($fechafin,2,2)."-".substr($fechafin,0,2);
    $finit2 = substr($fechainicio,0,2)."-".substr($fechainicio,2,2)."-".substr($fechainicio,4,7);
    $fter2 = substr($fechafin,0,2)."-".substr($fechafin,2,2)."-".substr($fechafin,4,7);


  //Se realiza el formato de las fecha, para mostrar en el header de la página
  switch ($valores){
      //más vendidos
    case '1':
    /*
        $data = DB::table('venta')
            ->join('detalleventa', 'venta.cod_venta', '=', 'detalleventa.cod_venta')
            ->join('producto', 'detalleventa.cod_producto', '=', 'producto.id_producto')
            ->select(DB::raw('producto.id_producto,producto.nombre,producto.precio,producto.stock, sum(detalleventa.cantidad) as cantidad_vendido'))
            ->where([['venta.fechadate','>=',$finit],['venta.fechadate','<=',$ftert]])
            ->groupBy('producto.id_producto')
            ->orderBy('cantidad_vendido', 'desc')
            ->limit(10)
            ->get();*/
        $data = DB::select('select producto.*, tabla1.cantidad_vendido
        from producto join
        (select producto.id_producto, sum(detalleventa.cantidad) as cantidad_vendido from venta, detalleventa, producto 
        WHERE
        venta.cod_venta = detalleventa.cod_venta AND
        detalleventa.cod_producto = producto.id_producto AND
        venta.fechadate between ? and ?
        group by producto.id_producto
        order by cantidad_vendido desc
        limit 10) tabla1
        on producto.id_producto = tabla1.id_producto
        order by cantidad_vendido desc;', [$finit, $ftert]);
    break;

    case '2':
        $data = DB::select('select producto.*, tabla1.cantidad_vendido
        from producto join
        (select producto.id_producto, sum(detalleventa.cantidad) as cantidad_vendido from venta, detalleventa, producto 
        WHERE
        venta.cod_venta = detalleventa.cod_venta AND
        detalleventa.cod_producto = producto.id_producto AND
        venta.fechadate between ? and ?
        group by producto.id_producto
        order by cantidad_vendido asc
        limit 10) tabla1
        on producto.id_producto = tabla1.id_producto
        order by cantidad_vendido asc;', [$finit, $ftert]);

    break;

    case '3':
        $data = DB::select('select producto.*, tabla1.cantidad_vendido
        from producto join
        (select producto.id_producto, sum(detalleventa.cantidad) as cantidad_vendido from venta, detalleventa, producto 
        WHERE
        venta.cod_venta = detalleventa.cod_venta AND
        detalleventa.cod_producto = producto.id_producto AND
        venta.fechadate between ? and ?
        group by producto.id_producto
        having sum(detalleventa.cantidad) = 0
        order by cantidad_vendido desc) tabla1
        on producto.id_producto = tabla1.id_producto
        order by cantidad_vendido desc;', [$finit, $ftert]);
    break;

    case '4':
        $data = DB::select('SELECT * FROM producto WHERE stock <= stockminimo'
        
        );
    break;
  }


  
//$data = Venta::where('fechadate','>=',$finit)->where('fechadate','<=',$ftert)->get();
$datos = array("ventas"=>$data,"fini" => $finit2,"fter" => $fter2,"valor"=> $valores);
}

return view('admin.informePeriodoTOP',$datos);   
}

}