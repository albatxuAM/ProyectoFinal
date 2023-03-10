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
                        <div class="card-body bg-light col-6">
                            <form method="POST" action="{{route('pedidos.store')}}" id='form' class="row">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="input_from">¿Cuando quiere recoger su pedido?</label>
                                        <div class="input-group mb-3">

                                        <input type="text" name='fecha' class="form-control" id="input" placeholder="Seleccione la fecha">
                                            <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
</svg></span>
                                        </div>
                                        <input type="hidden" name="idPersona" value="{{$persona->id}}">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="observaciones" id="exampleFormControlTextarea1" rows="3" placeholder="¿Quieres decirnos algo?"></textarea>

                                    </div>
                                </div>
                                <button type="submit" class="btn btn-outline-secondary" id="enviar">Continuar</button>
                            </form>
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
<script src="validar.js"></script>
<script src="calendar-14/js/jquery-3.3.1.min.js"></script>
<script src="calendar-14/js/popper.min.js"></script>
<script src="calendar-14/js/bootstrap.min.js"></script>
<script src="calendar-14/js/rome.js"></script>
<script src="calendar-14/js/main.js"></script>

@endsection