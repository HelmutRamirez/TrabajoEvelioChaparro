@extends('layouts.app')

@section('content')
    <h1>Crear Nivel de Estudio</h1>

    <section>
        <form action="{{ route('nivelestudios.store') }}" method="POST">
            @csrf
            <label class="label" for="descripcion_nivel_estudio">Descripción:</label>
            <input class="datos" type="text" name="descripcion_nivel_estudio" id="descripcion_nivel_estudio" value="{{ old('descripcion_nivel_estudio') }}" required maxlength="30">
            <br><br>

            <label class="label" for="estado_estudio">Estado:</label>
            <select class="datos" name="estado_estudio" id="estado_estudio" required>
                <option value="">Seleccione</option>
                <option value="Culminado" {{ old('estado_estudio') == 'Culminado' ? 'selected' : '' }}>Culminado</option>
                <option value="Cursando" {{ old('estado_estudio') == 'Cursando' ? 'selected' : '' }}>Cursando</option>
                <option value="Aplazado" {{ old('estado_estudio') == 'Aplazado' ? 'selected' : '' }}>Aplazado</option>
            </select>
            <br><br>

            <label class="label" for="nivel_academico">Nivel Académico:</label>
            <select class="datos" name="nivel_academico" id="nivel_academico" required>
                <option value="">Seleccione</option>
                <option value="Primaria" {{ old('nivel_academico') == 'Primaria' ? 'selected' : '' }}>Primaria</option>
                <option value="Secundaria" {{ old('nivel_academico') == 'Secundaria' ? 'selected' : '' }}>Secundaria</option>
                <option value="Media" {{ old('nivel_academico') == 'Media' ? 'selected' : '' }}>Media</option>
                <option value="Técnico" {{ old('nivel_academico') == 'Técnico' ? 'selected' : '' }}>Técnico</option>
                <option value="Tecnológico" {{ old('nivel_academico') == 'Tecnológico' ? 'selected' : '' }}>Tecnológico</option>
                <option value="Pregrado" {{ old('nivel_academico') == 'Pregrado' ? 'selected' : '' }}>Pregrado</option>
                <option value="Especialización" {{ old('nivel_academico') == 'Especialización' ? 'selected' : '' }}>Especialización</option>
                <option value="Maestría" {{ old('nivel_academico') == 'Maestría' ? 'selected' : '' }}>Maestría</option>
                <option value="Doctorado" {{ old('nivel_academico') == 'Doctorado' ? 'selected' : '' }}>Doctorado</option>
            </select>
            <br><br>

            <button class="button2" type="submit">Crear Nivel de Estudio</button>
        </form>
    </section>
@endsection
