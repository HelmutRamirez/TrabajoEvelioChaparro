<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NivelEstudio extends Model
{
    use HasFactory;

    protected $table = 'nivel_estudios'; 

    protected $fillable = [
        'descripcion_nivel_estudio',
        'estado_estudio',
        'nivel_academico',
    ];
}
