<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'venta';
    protected $primaryKey = 'cod_venta';

    public $timestamps = false;

public function detalles(){
    return $this->hasMany('App\DetalleVenta', 'cod_venta','cod_venta');

}

}
