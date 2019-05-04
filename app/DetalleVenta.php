<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $table = 'detalleventa';
    protected $primaryKey = 'contador';

    public $timestamps = false;
}
