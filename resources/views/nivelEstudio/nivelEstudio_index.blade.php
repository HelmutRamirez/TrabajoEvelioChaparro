@extends('layouts.app')

@section('content')
    <h1>Niveles de Estudio</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="tabla">
        <caption>Niveles de Estudio</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Nivel Académico</th>
           
            </tr>
        </thead>
        <tbody>
            @foreach ($nivelesEstudios as $nivelEstudio)
                <tr>
                    <td>{{ $nivelEstudio->id_nivel_estudio }}</td>
                    <td>{{ $nivelEstudio->descripcion_nivel_estudio }}</td>
                    <td>{{ $nivelEstudio->estado_estudio }}</td>
                    <td>{{ $nivelEstudio->nivel_academico }}</td>
                   
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="button-container">
        <a class="button2" href="{{ route('nivelestudios.create') }}">Crear Nivel de Estudio</a>
    </div>
@endsection