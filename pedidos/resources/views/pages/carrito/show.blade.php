@extends('layouts.layout')
@section('content')
<div class="row justify-content-center">
  <div class="col-10">
    <div class="row justify-content-around">
      <div class="col">
        <h2 class="col mb-4">Cesta</h2>
      </div>
    </div>
    <div class="col table-responsive table-scroll rounded" data-mdb-perfect-scrollbar="true">
      <table class="table  mb-0">
        <thead class="sticky" style="background-color: white; ">
          <tr class="text-uppercase text-secondary ">
            <th class="text-center">Producto</th>
            <th class="text-center">Cant</th>
            <th class="text-center">Total</th>
            <th class="text-center">Eliminar</th>
            <th class="text-center">Cantidad</th>
          </tr>
        </thead>
        <tbody>
          @if(session()->has('carrito'))
          @foreach(session('carrito') as $key => $value)
          <tr>
            <td class="td text-center">{{ $value['producto'] }}</td>
            <td class="td text-center ">{{ $value['cantidad'] }}</td>
            <td class="text-center subtotal" id="{{ $value['id'] }}">{{ $value['precio'] * $value['cantidad'] }}€</td>
            <td class="text-center"><a href="{{ route('carrito.borrar', $value['id']) }}">
                <button class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                  </svg></button>
              </a></td>
            <td class="td text-center">
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
            <td class="text-center">Total</td>

            <td class="" colspan="3"><input style="text-align:right" type="text" name="total" id="total" class="form-control" value="0" disabled></input> </td>
            <td>Precio total con IVA incluido</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="row mt-4 justify-content-end">
  <div class="col-2">
    <a href="{{route('cesta.formalizar')}}" class="btn btn-outline-secondary">Finalizar </a>
  </div>
</div>

@endsection
<script>
  document.addEventListener("DOMContentLoaded", function(e) {
    var inputTotal = document.getElementById('total');
    console.log(inputTotal);
    var totalCesta = 0;
    var subtotales = document.getElementsByTagName('td');

    for (let i = 0; i < subtotales.length; i++) {
      if (subtotales[i].className == 'text-center subtotal') {
        var importe = parseFloat(subtotales[i].innerText);
        totalCesta += importe;

      }
    }
    inputTotal.value = totalCesta + "€";

  });
</script>