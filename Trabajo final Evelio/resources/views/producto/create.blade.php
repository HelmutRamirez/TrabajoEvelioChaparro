
@extends('layouts.app')

@section('title', 'Lista de Productos')

@section('content')



<section>
    <form action="{{ route('ruta_creacion_producto') }}" method="post">
        @csrf
        <label class="label" for="">Nombre</label>
        <input class="datos" name="nombre" type="text">
            <br>
            <br>
        <label class="label" for="">Descripción</label>
        <input class="datos" name="descripcion" type="text">
        <br>    
        <br>
        <label class="label" for="">Presentación</label>
        <input class="datos" name="presentacion" type="text">
        <br>
        <br>
        <label class="label" for="">Pais Origen</label>
        <input class="datos" name="pais_origen" type="text">
        <br>
        <br>
        <label class="label" for="">Precio</label>
        <input class="datos" name="precio" type="number">
        <br>
        <br>

        <label class="label" for="">Stock</label>
        <input class="datos" name="stock" type="number">
        <br>
        <br>
        <button  class="button2" type="submit">Enviar</button>
    </form><br>

@endsection