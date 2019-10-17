<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'plan';
    protected $primaryKey = 'idPlan';
    public $timestamps = false;

    protected $fillable = ['idPlan', 'nombrePlan', 'cantidadSesiones', 'minutosSesiones', 'tipoServicio', 'costoPlan', 'descripcion'];
}
