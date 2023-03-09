@extends('layouts.layout')
@section('content')


<div class="content">
    <div class="container text-left">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card row bg-light ">
                    <div class="card-header text-white bg-secondary col">
                        <h5>Confirmaci&oacute;n del pedido</h5>
                    </div>
                    <div class="row">
                        <div class="card-body bg-light col-6">
                            <h5 class="card-title "><b>Datos del cliente</b></h5>
                            <ul class="list-group list-group-flush bg-light">
                                <li class="list-group-item bg-light"><b> Nombre:</b> {{ $persona->nombre }}</li>
                                <li class="list-group-item bg-light"><b>Email:</b> {{ $persona->email }}</li>
                                <li class="list-group-item bg-light"><b>Tel&eacute;fono:</b> {{ $persona->telefono }}</li>
                            </ul>
                        </div>
                        <div class="card-body bg-light col-6">
                            <form method="POST" action="{{route('pedidos.store')}}" id='formulario' class="row">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="input_from">¿Cuando quiere recoger su pedido?</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar"></i></span>
                                            <input type="text" name='fecha' class="form-control" id="input" placeholder="Seleccione la fecha">
                                        </div>
                                        <input type="hidden" name="idPersona" value="{{$persona->id}}">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="¿Quieres decirnos algo?"></textarea>

                                    </div>
                                </div>
                                <button type="submit" class="btn btn-outline-secondary" id="enviar">Continuar</button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body bg-light col">
                        <h5 class="card-title "><b>Detalle del pedido</b></h5>
                        <table class="table align-middle  mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(session('carrito') as $key => $value)
                                <tr>
                                    <td>
                                        <img class="card-img-top img-fluid img-thumbnail" style="width: 110px" alt="{{$value['producto']}}" @if( file_exists('thumbnails/'.$value['id'].'.png') ) src="{{ asset('thumbnails/'.$value['id'].'.png') }}" @else src="{{ asset('images/placeholder.png') }}" @endif />
                                    </td>
                                    <td class="td text-center">{{ $value['producto'] }}</td>
                                    <td class="td text-center ">{{ $value['cantidad'] }}</td>
                                    <td class="text-center subtotal" id="{{ $value['id'] }}">{{ $value['precio'] * $value['cantidad'] }}€</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td class="text-center">Total</td>
                                    <td class="" colspan="4"><input style="text-align:right" type="text" name="total" id="total" class="form-control" value="0" disabled></input> </td>
                                    <td>Precio total con IVA incluido</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<script src="calendar-14/js/jquery-3.3.1.min.js"></script>
<script src="calendar-14/js/popper.min.js"></script>
<script src="calendar-14/js/bootstrap.min.js"></script>
<script src="calendar-14/js/rome.js"></script>
<script src="calendar-14/js/main.js"></script>
@endsection