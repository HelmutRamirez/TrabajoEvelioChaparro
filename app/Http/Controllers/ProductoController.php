<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function create(){
        return view("producto.create");
    }

    public function stores(Request $request){
        
        $validados=$request->validate([
            'nombre'=>'required|string|min:5|max:30',
            'descripcion'=>'required|string|min:10|max:255',
            'presentacion'=>'required|string|min:5|max:30',
            'pais_origen'=>'required|string|min:5|max:30',
            'precio'=>'required|numeric',
            'stock'=>'required|numeric',
        ]);
        $producto=Producto::create([
            'nombre'=> $validados['nombre'],
            'descripcion'=> $validados['descripcion'],
            'presentacion'=> $validados['presentacion'],
            'pais_origen'=> $validados['pais_origen'],
            'precio'=> $validados['precio'],
            'stock'=> $validados['stock'],

        ]);
        
    
        return redirect()->route('productos_index')->with('success', 'Producto guardado correctamente');
    }
    public function index()
    {
        // Obtener todos los productos desde la base de datos
        $productos = Producto::all();

        // Pasar los productos a la vista
        return view('producto.index',['productos'=>$productos]);
    }

}
