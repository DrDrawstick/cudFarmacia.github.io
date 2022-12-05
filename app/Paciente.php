<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'pacientes';
    protected $fillable = ['nombre', 'apellidoPaterno','apellidoMaterno','fechaNacimiento','direccion','numeroTelefono','genero'];
}
