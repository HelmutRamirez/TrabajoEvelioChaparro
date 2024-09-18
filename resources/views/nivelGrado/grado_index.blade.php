@extends('layouts.app')

@section('content')

    <h1>Niveles de Grado</h1>
    <section>
    <table>
        <thead>
            <tr>
                <th>Tipo de Nivel</th>
                <th>Salario Mínimo</th>
                <th>Salario Máximo</th>
                <th>Meses de Experiencia Mínimos</th>
                <th>Nivel de Estudio Requerido</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach ($nivelGrados as $nivelGrado)
                <tr>
                    <td>{{ $nivelGrado->tipo_nivel_grado }}</td>
                    <td>{{ $nivelGrado->salario_minimo }}</td>
                    <td>{{ $nivelGrado->salario_maximo }}</td>
                    <td>{{ $nivelGrado->min_meses_expe }}</td>
                    <td>{{ $nivelGrado->nivelEstudio->descripcion_nivel_estudio }}</td>
                  
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="button-container">
        <a class="button2" href="{{ route('nivelGrado.create') }}">Crear Nivel de Grado</a>
    </div>
   </section>
@endsection
