@extends('layouts.app')

@section('content')
    <h1>Crear Empresa</h1>

<section>
    <form action="{{ route('empresas.store') }}" method="POST">
        @csrf
       
            <label class="label"for="nit">NIT:</label>
            <input class="datos"type="text" name="nit" id="nit" value="{{ old('nit') }}" required maxlength="11">
            <br>
            <br>
            <label class="label"for="razon_social">Razón Social:</label>
            <input class="datos"type="text" name="razon_social" id="razon_social" value="{{ old('razon_social') }}" required maxlength="100">
            <br>
            <br>
            <label class="label"for="telefono_entidad">Teléfono:</label>
            <input class="datos"type="text" name="telefono_entidad" id="telefono_entidad" value="{{ old('telefono_entidad') }}" required maxlength="10">
            <br>
            <br>
            <label class="label"for="correo_entidad">Correo:</label>
            <input class="datos"type="email" name="correo_entidad" id="correo_entidad" value="{{ old('correo_entidad') }}" required>
            <br>
            <br>
        <button class="button2" type="submit">Crear Empresa</button>
    </form>
    </section>
@endsection