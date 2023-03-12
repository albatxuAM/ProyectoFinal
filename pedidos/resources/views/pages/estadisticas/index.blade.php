@extends('layouts.layout')
@section('content')
<div class="row justify-content-center">
    <div class="col-11 col-md-10 my-5">
        <div class="row mb-3 justify-content-center">
            <div class="col-12 col-md-6 mb-3">
                <div class="card text-center">
                    <div class="card-header">
                        <b> N&ordm; pedidos pendientes por estado </b>
                    </div>
                    <div class="card-body justify-content-center">
                        <canvas class="" id="productosPedidoPendiente"></canvas>
                    </div>
                    <div class="card-footer text-muted">
                       <br>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="card text-center">
                    <div class="card-header">
                        <b> Pedidos esta semana vs semana pasada </b> 
                    </div>
                    <div class="card-body justify-content-center">
                        <canvas id="ventasSemana"></canvas>
                    </div>
                    <div class="card-footer text-muted">
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3 justify-content-center">
            <div class="col-12 col-md-6 mb-3">
                <div class="card text-center">
                    <div class="card-header">
                        <b> N&ordm; pedidos por mes </b>
                    </div>
                    <div class="card-body justify-content-center">
                        <canvas id="line"></canvas>
                    </div>
                    <div class="card-footer text-muted">
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="card text-center">
                    <div class="card-header">
                        <b> N&ordm; productos por categoria </b>
                    </div>
                    <div class="card-body justify-content-center">
                        <canvas class="" id="productosTipo"></canvas>
                    </div>
                    <div class="card-footer text-muted">
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3 justify-content-center">
            <div class="col-12 col-md-6 mb-3">
                <div class="card text-center">
                    <div class="card-header">
                        <b> N&ordm; pedidos totales por estado </b>
                    </div>
                    <div class="card-body justify-content-center">
                        <canvas class="" id="estadoPedidos"></canvas>
                    </div>
                    <div class="card-footer text-muted">
                       <br>
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