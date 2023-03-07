@extends('layouts.layout')
@section('content')
<h1>Confirmar pedido</h1>

<div class="content">

    <div class="container text-left">
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <form method="POST" action="" id='formulario' class="row">
                    @csrf
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="input_from">¿Cuando quiere recoger su pedido?</label>
                            <input type="text" name='fecha' class="form-control" id="input">
                            <input type="hidden" name="idPersona" value="{{$persona->id}}">
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
<script>
    var inputCalendario = document.getElementById('input');

    btnEnviar = document.getElementById('enviar');
    btnEnviar.addEventListener('click', validarFecha);
    var formulario = document.getElementById("formulario");
    var datos = new FormData(formulario);
    console.log(datos);
    function validarFecha(ev) {
        ev.preventDefault();
        try {

            var fechaSolicitada = new Date(inputCalendario.value);
            var hoy = new Date();

            
            hoy.setHours(0, 0, 0, 0);

            if (fechaSolicitada < hoy) {
                throw "El día no puede ser anterior al dia de hoy";
            }
            var diaSemana = fechaSolicitada.getDay();
            
            if (diaSemana == 0 || diaSemana == 6) {
                throw "No se cogen pedidos los fines de semana";
            }
            
            solicitarPedidosDelDiaSeleccionado(fechaSolicitada);

        } catch (err) {
            alert(err)
        }
    }

    function solicitarPedidosDelDiaSeleccionado(fecha) {
        console.log(fecha);
        fetch('/pedidos/disponibles?fecha='+fecha+"'",{
            method:'GET',
    })
    .then(response => response.json())
    .then(data=>{
        console.log(data.data);
    })
    }
</script>

<script src="calendar-14/js/jquery-3.3.1.min.js"></script>
<script src="calendar-14/js/popper.min.js"></script>
<script src="calendar-14/js/bootstrap.min.js"></script>
<script src="calendar-14/js/rome.js"></script>
<script src="calendar-14/js/main.js"></script>
@endsection