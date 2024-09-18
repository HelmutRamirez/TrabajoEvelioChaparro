@extends('layouts.app')

@section('title', 'Lista de Productos')

@section('content')

<h1>Lista de Productos</h1>
<section>
<div class="tabla-container">
    <table class="tabla">
    <thead>
            <tr>
                <th>NIT</th>
                <th>Razón Social</th>
                <th>Teléfono</th>
                <th>Correo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empresas as $empresa)
                <tr>
                    <td>{{ $empresa->nit }}</td>
                    <td>{{ $empresa->razon_social }}</td>
                    <td>{{ $empresa->telefono_entidad }}</td>
                    <td>{{ $empresa->correo_entidad }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </section>
    <div class="button-container">
        <a class="button2" href="/empresas/create">Crear Empresa</a>
    </div>
    <br>
</div>
@endsection