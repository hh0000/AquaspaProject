<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'paciente';
    protected $primaryKey = 'idPaciente';
    public $timestamps = false;

    protected $fillable = ['idPaciente','rutPaciente', 'nombrePaciente', 'fechaNacPaciente', 'emailPaciente','profesionPaciente','tel_emergenciaPaciente','telefonoPaciente','direccionPaciente','comentarios'];
}
