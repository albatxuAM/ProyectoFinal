@extends('layouts.layout')
@section('content')

<div class="row justify-content-center mt-5">
    <div class="card mb-3 p-0" style="max-width: 80%;">
        <div class="row g-0 " id="cont">
            <div class="col-md-4 p-5 " id='marco'>
                <figure class="figure justify-content-center ">
                    <img src="{{ asset('images/croqueta.png') }}" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">{{ $producto->nombre }}</figcaption>
                </figure>
            </div>
            <div class="col-md-8 mt-5">
                <div class="card-body">
                    <h3 class="card-title">{{ $producto->nombre }}</h3>
                    <p class="card-text">{{ $producto->precio }}€</p>
                    <p class="card-text">Pedido minimo: {{ $producto->pedidoMinimo }} raciones</p>
                </div>
                <div class='row d-flex '>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class=" ml-auto col-2  bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-5">
    <div class="col-12">
        <h3>Productos relacionados</h3>
    </div>
    <hr>
</div>
<div class="row justify-content-center p-5" id="rel">
@foreach($relacionados as $relacionado)
<div class="col-2 px-3 ms-4 card border-light">
    <img class="card-img-top img-fluid img-thumbnail" alt="Bootstrap Thumbnail Second" src="{{ asset('images/croqueta.png') }}" />
    <div class="card-body">
        <div class="card-title">
            <h6> {{ $relacionado->nombre }} </h6>
        </div>
    </div>
    <div class="card-footer text-muted">
        <a class="btn btn-outline-secondary" href="{{ route('productos.show', $relacionado) }}">Ver</a>
    </div>
</div>
@endforeach
</div>

@endsection