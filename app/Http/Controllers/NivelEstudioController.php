<?php

namespace App\Http\Controllers;
use App\Models\NivelEstudio;
use Illuminate\Http\Request;

class NivelEstudioController extends Controller
{
    public function index()
    {
        $nivelesEstudios = NivelEstudio::all(); 
        return view('nivelEstudio.nivelEstudio_index', ['nivelesEstudios'=> $nivelesEstudios]);
    }

    public function create()
    {
        return view('nivelEstudio.create_nivelEstudio');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'descripcion_nivel_estudio' => 'required|string|max:30',
            'estado_estudio' => 'required|in:Culminado,Cursando,Aplazado',
            'nivel_academico' => 'required|in:Primaria,Secundaria,Media,Técnico,Tecnológico,Pregrado,Especialización,Maestría,Doctorado',
        ]);

        NivelEstudio::create($validatedData);

        return redirect()->route('nivelestudios.index')->with('success', 'Nivel de estudio creado exitosamente.');
    }
}