@extends('layouts.app')

@section('title', 'Lista de Productos')

@section('content')

<h1>Lista de Productos</h1>
<section>
<div class="tabla-container">
    <table class="tabla">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Presentación</th>
                <th>País de Origen</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Fecha de Creación</th>
                <th>Fecha de Actualización</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->presentacion }}</td>
                    <td>{{ $producto->pais_origen }}</td>
                    <td>${{ number_format($producto->precio, 2) }}</td>
                    <td>{{ $producto->stock }}</td>
                    <td>{{ $producto->created_at}}</td>
                    <td>{{ $producto->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </section>
    <div class="button-container">
        <a class="button2" href="/producto">Crear producto</a>
    </div>
    <br>
</div>
@endsection