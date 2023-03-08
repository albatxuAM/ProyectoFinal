@extends('layouts.layout')
@section('content')

    {{-- <div class="container">
        <p class="text-center fs-3 lead">Pedidos por mes</p>
        <canvas id="grafico"></canvas>
    </div> --}}

    @include('pages.estadisticas.doughnut')
    {{-- @include('pages.estadisticas.timeScale') --}}
    {{-- @include('pages.estadisticas.polarArea') --}}
    {{-- @include('pages.estadisticas.line') --}}
@endsection