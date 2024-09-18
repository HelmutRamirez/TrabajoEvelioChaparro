<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\NivelGrado;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index()
    { 
        $cargos = Cargo::all(); 
        return view('cargo.cargo_index', ['cargos'=>$cargos]);
    }

    public function create()
    {
        $nivelGrados = NivelGrado::all();
        return view('cargo.create_cargo', ['nivelGrados'=>$nivelGrados]);
       
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre_cargo' => 'required|string|max:30',
            'descripcion_cargo' => 'required|string',
            'nivel_riesgo' => 'required|in:1,2,3,4,5',
            'id_nivel_grado' => 'required|exists:nivel_grados,id_nivel_grado',
        ]);

        Cargo::create($validatedData);

        return redirect()->route('cargos.index')->with('success', 'Cargo creado exitosamente.');
    }
}
