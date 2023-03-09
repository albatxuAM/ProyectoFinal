@extends('layouts.layout')
@section('content')
<div class="row justify-content-center">
    <div class="col-11 col-md-10 my-5">
        <div class="row mb-3">
            <div class="col-12 col-md-6">
                <div class="card text-center">
                    <div class="card-header">
                        Nº pedidos por estado
                    </div>
                    <div class="card-body justify-content-center">
                        <canvas class="" id="estadoPedidos"></canvas>
                    </div>
                    <div class="card-footer text-muted">
                      2 days ago
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card text-center">
                    <div class="card-header">
                        Nº productos por categoria
                    </div>
                    <div class="card-body justify-content-center">
                        <canvas class="" id="productosTipo"></canvas>
                    </div>
                    <div class="card-footer text-muted">
                      2 days ago
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card text-center">
                    <div class="card-header">
                        Nº pedidos por mes
                    </div>
                    <div class="card-body justify-content-center">
                        <canvas id="line"></canvas>
                    </div>
                    <div class="card-footer text-muted">
                      2 days ago
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card text-center">
                    <div class="card-header">
                        Pedidos esta semana vs semana pasada
                    </div>
                    <div class="card-body justify-content-center">
                        <canvas id="ventasSemana"></canvas>
                    </div>
                    <div class="card-footer text-muted">
                      2 days ago
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</div>


    {{-- <div id="chart" class="col-4" style="width: 100%">
        <p>Pedidos por estado</p>
        <canvas id="estadoPedidos" width="400" height="400"></canvas>
    </div>

    <div id="chart" class="col-4" style="width: 100%">
        <p>Pedidos por mes</p>
        <canvas id="line" width="400" height="400"></canvas>
    </div>

    <div id="chart" class="col-4" style="width: 100%">
        <p>Pedidos por seman</p>
        <canvas id="ventasSemana" width="400" height="400"></canvas>
    </div> --}}

@endsection