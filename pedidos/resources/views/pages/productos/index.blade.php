@extends('layouts.layout')
@section('content')

<div class="row mt-4 d-flex justify-content-center"><!-- PLATOS -->
    <div class="col-10 col-md-11 col-lg-10 mb-1">

        <h1>PLATOS PARA LLEVAR</h1>
        <div class="row gy-4"> <!-- cards de condiciones y a tener en cuenta -->
            <div class="d-none d-sm-block col-sm-12 col-md-12 col-lg-6 avisos">
                <div class="card">
                    <h5 class="card-header">
                        Condiciones
                    </h5>
                    <div class="card-body">
                        <dl class="card-text">
                            <dt>REALIZACION DE PEDIDOS</dt>
                            <dd>Únicamente se puede hacer reserva de pedidos a través de egibide.org.</dd>
                            <dd>No se atenderán a través del teléfono.</dd>
                            <dt>CONFIRMACION DE PEDIDOS</dt>
                            <dd>Para que un pedido se pueda interpretar como firme, el solicitante deberá recibir un mensaje de conformidad con el pedido solicitado.
                                El número mínimo de raciones de cada producto es de 2 y siempre deben ser múltiplos de 2, salvo la repostería.</dd>
                        </dl>
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

            <?php $arrayPostres = []; ?>
            @foreach($tipos as $tipo)
            <?php

            if ($tipo->nombre == 'SEMIFRIOS' || $tipo->nombre == 'TARTAS' || $tipo->nombre == 'VARIEDADES') {
                array_push($arrayPostres, $tipo);
            ?>
            <?php } else { ?>
                <a class="col-6 mt-4 ms-2 col-md btn filtro btn-outline-secondary " href="{{ route('productos.index',$tipo->id) }}">{{ $tipo->nombre }}</a>
            <?php } ?>
            @endforeach


            <div class="col-6 mt-4 ms-2 col-md  dropdown">
                <button class="btn btn-outline-secondary productillo dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    POSTRES
                </button>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach($arrayPostres as $postre)
                    <a class="dropdown-item" href="{{ route('productos.index', $tipo->id) }}">{{ $postre->nombre }}</a>
                    @endforeach
                </div>
            </div>

        </div><!-- FIN BOTONES FILTROS -->
        <div class="row mt-4 d-flex gy-3 mb-3"><!-- PLATOS -->
            @include('layouts.cards')
            {{ $productos->links() }}

        </div><!-- FIN PLATOS -->

    </div>






</div>
@endsection