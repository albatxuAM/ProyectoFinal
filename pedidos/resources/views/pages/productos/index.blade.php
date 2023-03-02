@extends('layouts.layout')
@section('content')
<div class="row mt-4 d-flex justify-content-center"><!-- PLATOS -->
    <div class="col-10 col-md-11 col-lg-10">

        <h1>PLATOS PARA LLEVAR</h1>
        <div class="row gy-4"> <!-- cards de condiciones y a tener en cuenta -->
            <div class="d-none d-sm-block col-sm-12 col-md-12 col-lg-6 avisos">
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
        <div class="row gy-3 mt-4">

            <div class="col-12"><!-- Col del groupList -->
                <div class="list-group list-group-horizontal" id="list-tab" role="tablist">
                    @foreach($tipos as $tipo)
                    <a class="list-group-item list-group-item-action" href="{{ route('productos.index',$tipo->id) }}" role="tab" aria-controls="list-profile">{{ $tipo->nombre }}</a>
                    @endforeach
                </div>
            </div>

            <!-- COL DEL CONTENIDO -->
                <div class=" col-12 tab-content" id="nav-tabContent">
                    <div class=" row tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <div class="col-12 px-3 plato card-group">
                            @foreach($productos as $producto)
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 px-3 card border-light">
                                    <img class="card-img-top img-fluid img-thumbnail" alt="Bootstrap Thumbnail Second" src="{{ asset('images/croqueta.png') }}" />
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h5> {{ $producto->nombre }} </h5>
                                        </div>
                                        <div class="card-text">
                                            <p> Precio: {{ $producto->precio }}€</p>
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        <a class="btn btn-outline-secondary" href="{{ route('productos.show', $producto) }}">Opciones</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            
        </div>
        {{ $productos->links() }}

        <!-- <div class="row">

            @foreach($tipos as $tipo)
            <a class="col-6 mt-4 ms-2 col-md btn filtro btn-outline-secondary " href="{{ route('productos.index',$tipo->id) }}">{{ $tipo->nombre }}</a>
            @endforeach



        </div>FIN BOTONES FILTROS -->


        <!-- <div class="row mt-4 d-flex gy-3">
            @foreach($productos as $producto)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 px-3 plato card-group">
                <div class="card border-light">
                    <img class="card-img-top img-fluid img-thumbnail" alt="Bootstrap Thumbnail Second" src="{{ asset('images/croqueta.png') }}" />
                    <div class="card-body">
                        <div class="card-title">
                            <h5> {{ $producto->nombre }} </h5>
                        </div>
                        <div class="card-text">
                            <p> Precio: {{ $producto->precio }}€</p>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <a class="btn btn-outline-secondary" href="#">Opciones</a> 
                    </div>
                </div>
            </div>
            @endforeach
            {{ $productos->links() }}

        </div> -->
    </div>
</div>
@endsection