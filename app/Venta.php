<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'venta';
    protected $primaryKey = 'idVenta';
    public $timestamps = false;

    protected $fillable = ['idVenta','rutPaciente','nombrePaciente','telefonoPaciente','fechaVenta','nombreServicio','costoServicio','nombreProfesional','telefonoProfesional','metodoPago','numeroDocumento','total','comentarios'];

}
