@extends('layouts.layout')
@section('content')

<div class="row my-4 justify-content-center">
    <div class="col-10 ">
        <div class="card">
            <div class="card-header">
                <h3>Detalle pedido</h3>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table align-middle mb-0 caption-top table-hover">
                <!-- <caption>Pedidos Pendientes:</caption> -->
                <thead>
                    <tr>

                        <th scope="col">Platos</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <ul class="list-group">
                                @foreach ($pedido->productosPedido as $producto)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{ $producto->producto->nombre }}
                                    <span class="badge bg-info rounded-pill">{{ $producto->cantidad }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <div class="d-flex justify-content-between">
                                <div>
                                    @switch($pedido->estadoPedido->nombre)
                                    @case('Recibido')
                                    <span class="badge bg-secondary rounded-pill d-inline"> {{ $pedido->estadoPedido->nombre }} </span>
                                    @break
                                    @case('En proceso')
                                    <span class="badge bg-warning rounded-pill d-inline">{{ $pedido->estadoPedido->nombre }}</span>
                                    @break
                                    @case('Proceso')
                                    <span class="badge bg-warning rounded-pill d-inline">{{ $pedido->estadoPedido->nombre }}</span>
                                    @break
                                    @case('Preparado')
                                    <span class="badge bg-success rounded-pill d-inline">{{ $pedido->estadoPedido->nombre }}</span>
                                    @break
                                    @case('Cancelado')
                                    <span class="badge bg-danger rounded-pill d-inline">{{ $pedido->estadoPedido->nombre }}</span>
                                    @break
                                    @case('Entregado')
                                    <span class="badge bg-primary rounded-pill d-inline">{{ $pedido->estadoPedido->nombre }}</span>
                                    @break
                                    @endswitch


                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- CONTENIDO OBSERVACIONES -->

        <div class="card mt-3">
            <div class="card-header">
                <h3>Observacion</h3>
                <div class="card-body">
                    @if ($pedido->observacion == "")
                    no tiene observaciones
                    @else
                    {{ $pedido->observacion }}
                    @endif
                </div>
            </div>
        </div>

        <div class="card mt-5">
            <!-- CONTENIDO USUARIO -->
            <div class="card-header">
                <h3>Detalle Usuario</h3>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table align-middle mb-0 caption-top table-hover">
                <tr>
                    <td>
                        Nombre
                    </td>
                    <td>
                        {{ $persona->nombre }}
                    </td>
                </tr>
                <tr>
                    <td>
                        Correo
                    </td>
                    <td>
                        {{ $persona->email }}
                    </td>
                </tr>
                <tr>
                    <td>
                        Telefono
                    </td>
                    <td>
                        {{ $persona->telefono }}
                    </td>
                </tr>
            </table>
        </div>
        <a role="button" aria-pressed="true" href="{{ URL::previous() }}" class="btn btn-secondary btn-block mt-3">Volver</a>

    </div>
</div>


@endsection