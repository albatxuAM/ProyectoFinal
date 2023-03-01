@extends('layouts.layout')
@section('content')

<h1>PLATOS PARA LLEVAR</h1>
<div class="row"> <!-- cards de condiciones y a tener en cuenta -->
    <div class="col-md-6">
        <div class="card">
            <h5 class="card-header">
                Condiciones
            </h5>
            <div class="card-body">
                <ul class="card-text">
                    <li>Los pedidos se realizarán con un mínimo de 3 días lectivos de antelación.</li>
                    <li>Únicamente se ponen a la venta platos de lunes a viernes.</li>
                    <li>Los pedidos se recogen en la cafetería entre las 15:00 y las 19:00.</li>
                    <li>Únicamente se puede hacer reserva de pedidos a través de egibide.org</li>
                    <li>No se atenderán a través del teléfono.</li>
                    <li>Para que un pedido se pueda interpretar como firme, el solicitante deberá recibir un mensaje de conformidad con el pedido solicitado.
                        El número mínimo de raciones de cada producto es de 2 y siempre deben ser múltiplos de 2, salvo la repostería.</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-6">
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
<div class="row d-flex justify-content-around">
    <div class="col-8 d-flex justify-content-around mt-4">
        <button type="button" class="btn btn-outline-secondary">Fritos</button>
        <button type="button" class="btn btn-outline-secondary">Entrantes</button>
        <button type="button" class="btn btn-outline-secondary">Pescados</button>
        <button type="button" class="btn btn-outline-secondary">Carnes</button>
        <button type="button" class="btn btn-outline-secondary">Semifrios</button>
        <button type="button" class="btn btn-outline-secondary">Tartas</button>
        <button type="button" class="btn btn-outline-secondary">Variedades</button>
    </div>
</div><!-- FIN BOTONES FILTROS -->


<div class="row mt-4 d-flex justify-content-center"><!-- PLATOS -->

    <div class="col-md-2 ">
        <div class="card plato">
            <img class="card-img-top" alt="Bootstrap Thumbnail Second" src="https://www.layoutit.com/img/city-q-c-600-200-1.jpg" />
            <div class="card-block">
                <h5 class="card-title">
                    Nombre del plato
                </h5>
                <p class="card-text">
                    Precio
                </p>
            </div>
            <div class="d-flex justify-content-end align-self-end">
               <a class=" btn btn-primary" href="#">Opciones</a> <!-- ENLACE A FORMULARIO PARA INICIAR SESION O SEGUIR COMO INVITADO -->
            </div>
        </div>
    </div>
    <div class="col-md-2 ">
        <div class="card plato">
            <img class="card-img-top" alt="Bootstrap Thumbnail Second" src="https://www.layoutit.com/img/city-q-c-600-200-1.jpg" />
            <div class="card-block">
                <h5 class="card-title">
                    Nombre del plato
                </h5>
                <p class="card-text">
                    Precio
                </p>
                <p>
                    <a class="btn btn-primary" href="#">Opciones</a> <!-- ENLACE A FORMULARIO PARA INICIAR SESION O SEGUIR COMO INVITADO -->
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-2 ">
        <div class="card plato">
            <img class="card-img-top" alt="Bootstrap Thumbnail Second" src="https://www.layoutit.com/img/city-q-c-600-200-1.jpg" />
            <div class="card-block">
                <h5 class="card-title">
                    Nombre del plato
                </h5>
                <p class="card-text">
                    Precio
                </p>
                <p>
                    <a class="btn btn-primary" href="#">Opciones</a> <!-- ENLACE A FORMULARIO PARA INICIAR SESION O SEGUIR COMO INVITADO -->
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-2 ">
        <div class="card plato">
            <img class="card-img-top" alt="Bootstrap Thumbnail Second" src="https://www.layoutit.com/img/city-q-c-600-200-1.jpg" />
            <div class="card-block">
                <h5 class="card-title">
                    Nombre del plato
                </h5>
                <p class="card-text">
                    Precio
                </p>
                <p>
                    <a class="btn btn-primary" href="#">Opciones</a> <!-- ENLACE A FORMULARIO PARA INICIAR SESION O SEGUIR COMO INVITADO -->
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-2 ">
        <div class="card plato">
            <img class="card-img-top" alt="Bootstrap Thumbnail Second" src="https://www.layoutit.com/img/city-q-c-600-200-1.jpg" />
            <div class="card-block">
                <h5 class="card-title">
                    Nombre del plato
                </h5>
                <p class="card-text">
                    Precio
                </p>
                <p>
                    <a class="btn btn-primary" href="#">Opciones</a> <!-- ENLACE A FORMULARIO PARA INICIAR SESION O SEGUIR COMO INVITADO -->
                </p>
            </div>
        </div>
    </div>

</div><!-- FIN PLATOS -->



@endsection