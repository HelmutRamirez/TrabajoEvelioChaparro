@extends('layouts.app')

@section('content')

<section>
    <h1>Paymaster</h1>
    <img src="{{ asset('imgs/logo2.png') }}" alt="Logo de Paymaster" width="400" height="400">
    <p>Este software simplifica la gestión empresarial al centralizar múltiples empresas en una sola plataforma.
        Ofrece roles específicos como Administradores, Recursos Humanos, Contadores y Empleados, cada uno con acceso
        a funciones adaptadas. Facilita la incorporación de nuevos empleados con ingreso eficiente de datos.
        Automatiza el cálculo preciso de la nómina, cumpliendo normativas vigentes y reduciendo el tiempo necesario
        para procesar pagos.</p>

    <div class="button-container">
        <a class="button2" href="/empresas">Empresas</a>
        <a class="button2" href="/nivelEstudio">Niveles de Estudio</a>
        <a class="button2" href="/nivelGrado">Niveles o Grados</a>
        <a class="button2" href="/cargos">Cargos</a>
    </div>


</section>

@endsection