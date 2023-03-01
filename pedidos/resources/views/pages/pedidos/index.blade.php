@extends('layouts.layout')
@section('content')

<div class="row my-4 justify-content-center">
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
                    @foreach ($pedidos as $pedido)
                        <tr>
                            <th scope="row"> {{ $pedido->id }} </th>
                            <td>
                                <ul class="list-group">
                                    @foreach ($pedido->productosPedido as $producto)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            {{ $producto->producto->nombre }}
                                            <span class="badge bg-primary rounded-pill">{{ $producto->cantidad }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <span class="badge bg-secondary rounded-pill d-inline"> {{ $pedido->estadoPedido->nombre }} </span> &nbsp;
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"> </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                  <li> <a class="dropdown-item" href="{{ route('pedidos.update', ['pedido'=> $pedido, 'estado'=>1]) }}">Recibido</a> </li>
                                  <li> <a class="dropdown-item" href="{{ route('pedidos.update', ['pedido'=> $pedido, 'estado'=>2]) }}">Proceso</a> </li>
                                  <li> <a class="dropdown-item" href="{{ route('pedidos.update', ['pedido'=> $pedido, 'estado'=>3]) }}">Preparado</a> </li>
                                  <li> <a class="dropdown-item" href="{{ route('pedidos.update', ['pedido'=> $pedido, 'estado'=>4]) }}">Cancelado</a> </li>
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row my-4 justify-content-center">
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
</div>
<div class="row">
    <div class="col">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Siguiente</a>
              </li>
            </ul>
          </nav>
    </div>
</div>

@endsection