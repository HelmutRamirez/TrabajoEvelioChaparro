<?php

namespace App\Http\Controllers;

use App\Models\NivelGrado;
use App\Models\NivelEstudio; 
use Illuminate\Http\Request;

class NivelGradoController extends Controller
{
    public function index()
    {
        $nivelGrados = NivelGrado::all();
        return view('nivelGrado.grado_index', ['nivelGrados'=>$nivelGrados]);
    }

    public function create()
    {
        $nivelEstudios = NivelEstudio::all(); 
        return view('nivelGrado.create_grado', ['nivelEstudios'=>$nivelEstudios]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tipo_nivel_grado' => 'required|in:Grado,Nivel,No aplica',
            'salario_minimo' => 'required|numeric|min:0',
            'salario_maximo' => 'required|numeric|min:0',
            'min_meses_expe' => 'required|integer|min:0',
            'id_nivel_estudio_requerido' => 'required|exists:nivel_estudios,id_nivel_estudio',
        ]);

        NivelGrado::create($validatedData);

        return redirect()->route('nivelGrado.index')->with('success', 'Nivel de grado creado exitosamente.');
    }

    
}
