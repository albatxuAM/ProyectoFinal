@extends('layouts.layout')
@section('content')
<h1>Confirmar pedido</h1>

<div class="content">

    <div class="container text-left">
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <form method="POST" action="{{route('pedidos.store')}}" id='formulario' class="row">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="input_from">¿Cuando quiere recoger su pedido?</label>
                            <input type="text" name='fecha' class="form-control" id="input">
                            <input type="hidden" name="idPersona" value="{{$persona->id}}">
                        </div>
                        <div class="form-group">
                            <textarea name="observaciones" cols="30" rows="6"></textarea>
                        </div>
                    </div>
                    <button type="submit" id="enviar">Enviar</button>
                </form>
            </div>

        </div>

        <h4>Datos del pedido</h4>
        <p>{{ $persona->nombre }}</p>
        <p>{{ $persona->email }}</p>
        <p>{{ $persona->telefono }}</p>

    </div>

</div>


<script src="calendar-14/js/jquery-3.3.1.min.js"></script>
<script src="calendar-14/js/popper.min.js"></script>
<script src="calendar-14/js/bootstrap.min.js"></script>
<script src="calendar-14/js/rome.js"></script>
<script src="calendar-14/js/main.js"></script>
@endsection