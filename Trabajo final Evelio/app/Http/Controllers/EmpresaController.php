<?php

namespace App\Http\Controllers;
use App\Models\Empresa;
use App\Models\NivelEstudio;
use Illuminate\Http\Request;


class EmpresaController extends Controller
{
    ##Empresas

    public function indexEmpresa()
    {
        $empresas = Empresa::all(); 
        return view('empresa.empresas_index', ['empresas'=>$empresas]);
    }

   
    public function createEmpresa()
    {
        return view('empresa.create_empresa');
    }

    
    public function storeEmpresa(Request $request)
    {
        $validatedData = $request->validate([
            'nit' => 'required|string|max:11|unique:empresas',
            'razon_social' => 'required|string|max:100',
            'telefono_entidad' => 'required|string|max:10',
            'correo_entidad' => 'required|string|email|max:255|unique:empresas',
        ]);

        Empresa::create($validatedData); 

        return redirect()->route('empresas.index')->with('success', 'Empresa creada exitosamente.');
    }


}
