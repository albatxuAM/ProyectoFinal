@extends('layouts.layout')
@section('content')

<div class="row my-4 justify-content-center">
    <div class="col-10 ">
        <div class="card">
            <div class="card-header">
              <form action="{{ route('pedidos.index') }}" id="formPedidos">
                <div class="row g-3 justify-content-between">
                    <div class="col-12 col-md-4 col-xl-3">
                        <div class="input-group">
                            <input type="number" min="0" id="idPedido" name="idPedido" class="form-control rounded" value="@if(isset($_GET['idPedido'])){{$_GET['idPedido']}}@endif" placeholder="Busqueda por idPedido" aria-label="Search" aria-describedby="search-addon" />
                            <button id="buscarP" class="btn btn-primary" hidden>Buscar</button>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-xl-3">
                        {{-- Multiple Select Dropdown --}}
                        {{-- <select name="estadoP[]" id="estadoP" class="form-select" multiple> --}}
                        <select name="estadoP" id="estadoP" class="form-select">
                            <option hidden value="0">Estado...</option>
                            @foreach($estados as $estado)
                                <option value="{{$estado->id}}">{{ $estado->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 col-md-2 col-xl-1">
                        <button id="buscarP" class="btn btn-primary">Buscar</button>
                    </div>
                </div>  
                </form>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table align-middle mb-0 caption-top table-hover">
                <!-- <caption>Pedidos Pendientes:</caption> -->
                <thead>
                    <tr>
                        {{-- class="d-none d-sm-block" --}}
                        <th>#</th>
                        <th>Platos</th>
                        <th>Estados</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pedidos as $pedido)
                        {{-- <tr onclick="window.location='{{ route('pedidos.show',  $pedido) }}'"> --}}
                        <tr>
                            <th> {{ $pedido->id }} </th>
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
                                <div class="d-flex justify-content-between align-items-center">
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
                                    <div >
                                        <button class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"> </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li> <a class="dropdown-item" href="{{ route('pedidos.update', ['pedido'=> $pedido, 'estado'=>1]) }}">Recibido</a> </li>
                                            <li> <a class="dropdown-item" href="{{ route('pedidos.update', ['pedido'=> $pedido, 'estado'=>2]) }}">Proceso</a> </li>
                                            <li> <a class="dropdown-item" href="{{ route('pedidos.update', ['pedido'=> $pedido, 'estado'=>3]) }}">Preparado</a> </li>
                                            <li> <a class="dropdown-item" href="{{ route('pedidos.update', ['pedido'=> $pedido, 'estado'=>4]) }}">Cancelado</a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <a role="button" href="{{ route('pedidos.show',$pedido) }}"  class="btn btn-link mt-3" value="Ver pedido">Ver pedido</a>
    
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{ $pedidos->links() }}

{{-- <div class="row my-4 justify-content-center">
    <div class="col-10 ">
        <div class="table-responsive">
            <table class="table align-middle mb-0 caption-top table-hover">
                <caption>Pedidos Pendientes:</caption>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Platos</th>
                        <th scope="col">Estados</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                  A list item
                                  <span class="badge bg-primary rounded-pill">7</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                  A second list item
                                  <span class="badge bg-primary rounded-pill">2</span>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <span class="badge bg-secondary rounded-pill d-inline">Recibido</span>
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"> </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <li> <a class="dropdown-item" href="#">Recibido</a> </li>
                              <li> <a class="dropdown-item" href="#">Proceso</a> </li>
                              <li> <a class="dropdown-item" href="#">Preparado</a> </li>
                              <li> <a class="dropdown-item" href="#">Cancelado</a> </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Mark</td>
                        <td>
                            <span class="badge bg-warning rounded-pill d-inline">Proceso</span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Mark</td>
                        <td><span class="badge bg-success rounded-pill d-inline">Preparado</span></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Mark</td>
                        <td><span class="badge bg-danger rounded-pill d-inline">Cancelado</span></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Mark</td>
                        <td><span class="badge bg-primary rounded-pill d-inline">Entregado</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> --}}

@endsection