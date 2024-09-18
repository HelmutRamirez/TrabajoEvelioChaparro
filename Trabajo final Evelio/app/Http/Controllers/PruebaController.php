<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function MostrarVista1()
    {
        return view('prueba.vista1');
    }
    public function MostrarNosotros()
    {
        return view('prueba.nosotros');
    }
    public function MostrarMision()
    {
        return view('prueba.mision');
    }
    public function MostrarVision()
    {
        return view('prueba.vision');
    }

    public function mostar_calculadora()
    {
        return view('prueba.calculadora');
    }
    public function calcular(Request $request)
    {
        $numero1= $request->input('numero1');
        $numero2= $request->input('numero2');
        $operacion= $request->input('operacion');
        $resultado=null;

        switch($operacion) {
            case 'suma':
                $resultado= $numero1+$numero2;
                break;
            case 'resta':
                $resultado= $numero1-$numero2;
                break;
            case 'multiplicacion':
                $resultado= $numero1*$numero2;
                break;
            case 'division':
                if ($numero2 != 0)
                    {
                    $resultado= $numero1/$numero2;
                }
                else{
                    print('Error: no se puede dividir por 0');
                }

                break;
                             
            default:
                print('Operacion no valida');
                break;
        }
        return view('prueba.calculadora', compact('resultado'));
    }
}
