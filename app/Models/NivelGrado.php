<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NivelGrado extends Model
{
    use HasFactory;


    protected $table = 'nivel_grados';


    protected $fillable = [
        'tipo_nivel_grado',
        'salario_minimo',
        'salario_maximo',
        'min_meses_expe',
        'id_nivel_estudio_requerido',
    ];
    public function nivelEstudio()
    {
        return $this->belongsTo(NivelEstudio::class, 'id_nivel_estudio_requerido', 'id_nivel_estudio');
    }
}
