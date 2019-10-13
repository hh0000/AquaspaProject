<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'servicio';
    protected $primaryKey = 'idServicio';
    public $timestamps = false;

    protected $fillable = ['idServicio', 'nombreServicio', 'cantidadSesiones', 'minutosSesiones', 'tipoServicio', 'costoServicio', 'descripcion'];
}
