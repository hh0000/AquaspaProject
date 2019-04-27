<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

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

public function mail(){
    return view('admin.mail');   

   }

}

