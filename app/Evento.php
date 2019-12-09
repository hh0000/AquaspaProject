<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'evento';
    protected $primaryKey = 'idEvento';

    public $timestamps = false;

    public function servicio(){
        return $this->belongsTo('App\Servicio', 'idServicio', 'idServicio');
    }
}