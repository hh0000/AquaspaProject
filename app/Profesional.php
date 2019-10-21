<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesional extends Model
{
    protected $table = 'profesional';
    protected $primaryKey = 'idProfesional';
    public $timestamps = false;

    protected $fillable = ['idProfesional', 'nombreProfesional', 'rutProfesional', 'telefonoProfesional'];
}
