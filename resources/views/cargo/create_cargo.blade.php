@extends('layouts.app')

@section('content')
    <h1>Crear Cargo</h1>
    <section>
        <form action="{{ route('cargos.store') }}" method="POST">
            @csrf
            <label class="label" for="nombre_cargo">Nombre Cargo:</label>
            <input class="datos" type="text" name="nombre_cargo" id="nombre_cargo" value="{{ old('nombre_cargo') }}" required maxlength="30">
            <br><br>
            <label class="label" for="descripcion_cargo">Descripción:</label>
            <textarea class="datos" name="descripcion_cargo" id="descripcion_cargo" required>{{ old('descripcion_cargo') }}</textarea>
            <br><br>
            <label class="label" for="nivel_riesgo">Nivel de Riesgo:</label>
            <select class="datos" name="nivel_riesgo" id="nivel_riesgo" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <br><br>
            <label class="label" for="id_nivel_grado">Nivel de Grado:</label>
            <select class="datos" name="id_nivel_grado" id="id_nivel_grado" required>
                @foreach ($nivelGrados as $nivelGrado)
                    <option value="{{ $nivelGrado->id_nivel_grado }}">{{ $nivelGrado->tipo_nivel_grado }}</option>
                @endforeach
            </select>
            <br><br>
            <button class="button2" type="submit">Crear Cargo</button>
        </form>
    </section>
@endsection
