@extends('layouts.layout')
@section('content')

    <div id="chart" class="col-4">
        <p>Pedidos por estado</p>
        <canvas id="estadoPedidos" width="400" height="400"></canvas>
    </div>

    <div id="chart" class="col-4">
        <p>Pedidos por mes</p>
        <canvas id="line" width="400" height="400"></canvas>
    </div>

    <div id="chart" class="col-4">
        <p>Pedidos por seman</p>
        <canvas id="ventasSemana" width="400" height="400"></canvas>
    </div>

    {{-- @include('pages.estadisticas.timeScale')
    @include('pages.estadisticas.polarArea') --}}
    {{-- @include('pages.estadisticas.line') --}}
@endsection