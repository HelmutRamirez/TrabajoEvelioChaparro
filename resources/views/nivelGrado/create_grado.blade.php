@extends('layouts.app')

@section('content')
    <h1>Crear Nivel de Grado</h1>

    <section>
        <form action="{{ route('nivelGrado.store') }}" method="POST">
            @csrf
            <label for="tipo_nivel_grado">Tipo de Nivel:</label>
            <select name="tipo_nivel_grado" id="tipo_nivel_grado" class="datos" required>
                <option value="">Selecciona...</option>
                <option value="Grado">Grado</option>
                <option value="Nivel">Nivel</option>
                <option value="No aplica">No aplica</option>
            </select>
            <br><br>
            <label for="salario_minimo">Salario Mínimo:</label>
            <input type="number" name="salario_minimo" id="salario_minimo" class="datos" step="0.01" required>
            <br><br>
            <label for="salario_maximo">Salario Máximo:</label>
            <input type="number" name="salario_maximo" id="salario_maximo" class="datos" step="0.01" required>
            <br><br>
            <label for="min_meses_expe">Meses de Experiencia Mínimos:</label>
            <input type="number" name="min_meses_expe" id="min_meses_expe" class="datos" required>
            <br><br>
            <label for="id_nivel_estudio_requerido">Nivel de Estudio Requerido:</label>
            <select name="id_nivel_estudio_requerido" id="id_nivel_estudio_requerido" class="datos" required>
                @foreach ($nivelEstudios as $nivelEstudio)
                    <option value="{{ $nivelEstudio->id_nivel_estudio }}">{{ $nivelEstudio->descripcion_nivel_estudio }}</option>
                @endforeach
            </select>
            <br><br>
            <button class="button2" type="submit">Crear Nivel de Grado</button>
        </form>
    </section>
@endsection
