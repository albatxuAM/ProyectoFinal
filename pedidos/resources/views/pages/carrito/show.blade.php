@extends('layouts.layout')
@section('content')

<div class="row justify-content-center conFondo ">
  <div class="col-12 col-md-10">

    <div class="card mt-5 mb-5"><!--CARD RESUMEN PEDIDO -->
      <div class="card-header">
        Tus productos
      </div>
      <div class="col table-responsive table-scroll rounded" data-mdb-perfect-scrollbar="true"><!-- tabla productos -->
        <table class="table align-middle  mb-0">
          <thead class="sticky" style="background-color: white; ">
            <tr class="text-uppercase text-secondary ">
              <th class="text-center d-none d-md-table-cell"></th>
              <th class="text-center">Producto</th>
              <th class="text-center">Cant</th>
              <th class="text-center">Total</th>
              <th class="text-center d-none d-md-table-cell">Eliminar</th>
              <th class="text-center d-none d-md-table-cell">Cantidad</th>
              </th>
            </tr>
          </thead>
          <tbody>
            @if(session()->has('carrito'))
            @foreach(session('carrito') as $key => $value)
            <tr class='lineaPedido'>
              <td class="d-none d-md-table-cell">
                <img class="card-img-top img-fluid img-thumbnail" style="width: 110px" alt="{{$value['producto']}}" @if( file_exists('thumbnails/'.$value['id'].'.png') ) src="{{ asset('thumbnails/'.$value['id'].'.png') }}" @else src="{{ asset('images/placeholder.png') }}" @endif />
              </td>
              <td class="td text-center">{{ $value['producto'] }}</td>
              <td class="td text-center ">{{ $value['cantidad'] }}</td>
              <td class="text-center subtotal" id="{{ $value['id'] }}">{{ $value['precio'] * $value['cantidad'] }}&euro;</td>
              <td class="d-md-none"><button class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">...</button></td>
              <!--Cuando es movil no aparecen la papelera ni el sumar y restar-->
              <div class="offcanvas offcanvas-bottom"style="width: 100%;" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                <div class="offcanvas-header">
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                
                  <div class="card offcanvas-body small" style="width: 100%;">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><a href="{{ route('carrito.borrar', $value['id']) }}">
                          Borrar todos
                        </a></li>
                      <li class="list-group-item"><a href="{{ route('carrito.restar', $value['id']) }}">
                      Quitar uno
                    </a></li>
                      <li class="list-group-item"><a href="{{ route('carrito.update', $value['id']) }}">
                    Añadir uno
                  </a></li>
                    </ul>
                  </div>
                
                <td class="text-center d-none d-md-table-cell"><a href="{{ route('carrito.borrar', $value['id']) }}">
                    <button class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                      </svg></button>
                  </a></td>

                <td class="td text-center d-none d-md-table-cell">
                  <a href="{{ route('carrito.restar', $value['id']) }}">
                    <span class="material-symbols-outlined me-3">remove</span>
                  </a>
                  <a href="{{ route('carrito.update', $value['id']) }}">
                    <span class="material-symbols-outlined">add</span>
                  </a>

                </td>


            </tr>
            @endforeach

            @else
            <tr>
              <td class="td text-center" colspan="4">La cesta esta vacía.</td>
              <td><a href="{{ route('productos.index') }}">Seguir mirando</a></td>
            </tr>
            @endif
            <tr>
              <td class="text-center"></td>
              <td ></td>
              <td colspan="2">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text d-none d-md-block" id="basic-addon1" style="background-color:white;">Total</span>
                  </div>
                  <input style="text-align:right; width:3em; background-color:white;" type="text" size="6" name="total" id="total" class="form-control" value="0"  disabled></input>
                </div>
              </td>
              <td colspan="2"></td>
              <td></td>
            </tr>
            <tr>
              <td ></td>
              <td colspan="2"><a href="{{ route('productos.index') }}" class="btn btn-outline-secondary">Seguir mirando</a></td>
              <td><a href="{{route('cesta.formalizar')}}" class="btn btn-outline-secondary">Finalizar </a></td>
              <td colspan="2"></td>
            </tr>
          </tbody>
        </table>
      </div><!-- fin tabla productos -->

    </div><!--FIN CARD RESUMEN PEDIDO -->

  </div>
</div>


</div>



@endsection