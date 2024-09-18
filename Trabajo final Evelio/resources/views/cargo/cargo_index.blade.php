@extends('layouts.app')

@section('content')
    <h1>Cargos</h1>
    <section>
        <table>
            <thead>
                <tr>
                    <th>Nombre Cargo</th>
                    <th>Descripción</th>
                    <th>Nivel de Riesgo</th>
                    <th>Nivel de Grado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cargos as $cargo)
                    <tr>
                        <td>{{ $cargo->nombre_cargo }}</td>
                        <td>{{ $cargo->descripcion_cargo }}</td>
                        <td>{{ $cargo->nivel_riesgo }}</td>
                        <td>{{ $cargo->nivelGrado->tipo_nivel_grado }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="button-container">
            <a class="button2" href="{{ route('cargos.create') }}">Crear Cargo</a>
        </div>
    </section>
@endsection
