<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $table = 'medicamentos';
    protected $fillable = ['nombre', 'laboratorio','lote','fecha_elavoracion','fecha_expiracion'];
}
