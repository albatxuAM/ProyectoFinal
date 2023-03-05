@extends('layouts.layout')
@section('content')
<div class="row justify-content-center">
  <div class="col-8">
    <h2 class="col  mb-4">Cesta</h2>
    <div class="card">
      <div class="card-body p-0">
        <div class="table-responsive table-scroll rounded" data-mdb-perfect-scrollbar="true">
          <table class="table  mb-0">
            <thead class="sticky" style="background-color: white; ">
              <tr class="text-uppercase text-success ">
                <th class="text-center">Producto</th>
                <th class="text-center">Cant</th>
                <th class="text-center">Total</th>
                <th class="text-center">Eliminar</th>
                <th class="text-center">Añadir</th>
              </tr>
            </thead>
            <tbody>
              @foreach(session('carrito') as $key => $value)
              <tr>
                <td class="text-center">{{ $value['producto'] }}</td>
                <td class="text-center">{{ $value['cantidad'] }}</td>
                <td class="text-center">{{ $value['precio'] * $value['cantidad'] }}€</td>
                <td><a href="#">
                    <button class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                      </svg></button>
                  </a></td>
                <td><a href="{{ route('carrito.update', $value['id']) }}"><span class="material-symbols-outlined">
                      add
                    </span></a>
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row justify-content-end">
  <div class="col-6">
    <spam>Total:</spam>
    <button type="button" class="btn btn-info" disabled>83.50€ </button>
    <spam>iva incluido</spam>
  </div>
</div>
<div class="row mt-1 justify-content-end">
  <div class="col-6">
    <form action="" method="get">
      @csrf
      <button type="submit" class="btn btn-lg btn-success">Finalizar </button>
    </form>
  </div>
</div>
@endsection