<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{use HasFactory;


    protected $primaryKey = 'nit';
    

    public $incrementing = false;


    protected $keyType = 'string';


    protected $fillable = [
        'nit', 
        'razon_social', 
        'telefono_entidad', 
        'correo_entidad'
    ];

}