@extends('layouts.layout')
@section('content')

<h1>PLATOS PARA LLEVAR</h1>
<div class="row gy-4"> <!-- cards de condiciones y a tener en cuenta -->
    <div class="d-none d-sm-block col-sm-12 col-md-12 col-lg-6 avisos ">
        <div class="card">
            <h5 class="card-header">
                Condiciones
            </h5>
            <div class="card-body">
                <ul class="card-text">
                    <li>Únicamente se puede hacer reserva de pedidos a través de egibide.org</li>
                    <li>No se atenderán a través del teléfono.</li>
                    <li>Para que un pedido se pueda interpretar como firme, el solicitante deberá recibir un mensaje de conformidad con el pedido solicitado.
                        El número mínimo de raciones de cada producto es de 2 y siempre deben ser múltiplos de 2, salvo la repostería.</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="d-none d-sm-block col-sm-12 col-md-12 col-lg-6 avisos">
        <div class="card">
            <h5 class="card-header">
                A tener en cuenta
            </h5>
            <div class="card-body">
                <dl class="card-text">
                    <dt>CONSERVACION DE ALIMENTOS REFRIGERADOS</dt>
                    <dd>Deben mantenerse a una temperatura comprendida entre 1 y 4 °C hasta su posterior recalentamiento o consumo final.</dd>
                    <dt>REGENERACION</dt>
                    <dd>Los alimentos recalentados deben consumirse lo antes posible y un alimento recalentado no debe volverse a refrigerar o congelar.</dd>
                    <dt>FRITOS</dt>
                    <dd>Los fritos se entregan sin cocinar. Los debe freír el usuario.</dd>
                </dl>
            </div>

        </div>
    </div>
</div><!-- FIN cards de condiciones y a tener en cuenta -->
<div class="row">
    <button type="button" class="col-6 mt-4 ms-2 col-md btn filtro btn-outline-secondary ">Fritos</button>
    <button type="button" class="col-6 mt-4 ms-2 col-md btn filtro btn-outline-secondary">Entrantes</button>
    <button type="button" class="col-6 mt-4 ms-2 col-md btn filtro btn-outline-secondary">Pescados</button>
    <button type="button" class="col-6 mt-4 ms-2 col-md btn filtro btn-outline-secondary">Carnes</button>
    <button type="button" class="col-6 mt-4 ms-2 col-md btn filtro btn-outline-secondary">Semifrios</button>
    <button type="button" class="col-6 mt-4 ms-2 col-md btn filtro btn-outline-secondary">Tartas</button>
    <button type="button" class="col-6 mt-4 ms-2 col-md btn filtro btn-outline-secondary">Variedades</button>

</div><!-- FIN BOTONES FILTROS -->


<div class="row mt-4 d-flex "><!-- PLATOS -->
    @foreach($productos as $producto)
    <div class="col-12 col-sm-4 col-md-3 plato">
        <div class="card ">
            <img class="card-img-top" alt="Bootstrap Thumbnail Second" src="https://www.layoutit.com/img/city-q-c-600-200-1.jpg" />
            <div class="card-block">
                <div class="card-title">
                    <h5> {{ $producto->nombre }} </h5>
                </div>
                <div class="card-text">

                    <p> Precio: {{ $producto->precio }}€</p>
                </div>
            </div>
            <div class="card-footer text-muted">
                <a class="btn btn-outline-secondary" href="#">Opciones</a> <!-- ENLACE A FORMULARIO PARA INICIAR SESION O SEGUIR COMO INVITADO -->
            </div>
        </div>
    </div>
    @endforeach
    {{ $productos->links() }}

</div><!-- FIN PLATOS -->

@endsection