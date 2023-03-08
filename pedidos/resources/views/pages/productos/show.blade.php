@extends('layouts.layout')
@section('content')
<div class="row mt-5">
    <div class="col">
        <a id='volver' href="{{ route('productos.index') }}">
            <span class="material-symbols-outlined"> arrow_back</span>
        </a>
    </div>
</div>
<div class="row justify-content-center mt-5">
    <div class="card mb-3 p-0" style="max-width: 80%;">
        <div class="row g-0 " >
            <div class="col-12 col-md-4 p-5 " id='marco'>
                <figure class="figure justify-content-center ">
                    <img class="card-img-top img-fluid" alt="{{$producto->name}}" 
                        @if( file_exists('images/'.$producto->id.'.png') )
                            src="{{ asset('images/'.$producto->id.'.png') }}" 
                        @else 
                            src="{{ asset('images/placeholder.png') }}" 
                        @endif
                    />
                    <figcaption class="figure-caption text-white">{{ $producto->nombre }}</figcaption>
                </figure>
            </div>
            <div class="col-12 col-md-8 " id="cont">
                <div class="card-body">
                    <h3 class="card-title mt-3">{{ $producto->nombre }}</h3>
                    <p class="card-text"> <a class="btn btn-outline border-3 disabled" style="border-color: #8b0066; color:white" href="#">{{ $tipo->nombre }}</a></p>
                    <p class="card-text">Precio: {{ $producto->precio }}€</p>
                    <p class="card-text">
                        @if($producto->observacion)
                        Observacion: {{ $producto->observacion }} 
                        @endif
                    </p>
                </div>
                <a href="{{ route('carrito.index',$producto) }}">
                    <span class=" ms-3 material-symbols-outlined mb-2">add</span>
                </a>
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
    @include('layouts.cards')
</div>

@endsection