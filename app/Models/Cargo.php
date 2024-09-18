<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $table = 'cargos';

    protected $primaryKey = 'id_cargo';

    protected $fillable = [
        'nombre_cargo',
        'descripcion_cargo',
        'nivel_riesgo',
        'id_nivel_grado',
    ];

    public function nivelGrado()
    {
        return $this->belongsTo(NivelGrado::class, 'id_nivel_grado','id_nivel_grado');
    }
}
