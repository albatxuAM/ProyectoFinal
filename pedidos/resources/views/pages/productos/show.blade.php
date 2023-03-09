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
        <div class="row g-0 ">
            <div class="col-12 col-md-4 p-5 " id='marco'>
                <figure class="figure justify-content-center ">
                    <img class="card-img-top img-fluid" alt="{{$producto->name}}" @if( file_exists('images/'.$producto->id.'.png') )
                    src="{{ asset('images/'.$producto->id.'.png') }}"
                    @else
                    src="{{ asset('images/placeholder.png') }}"
                    @endif
                    />
                    <figcaption class="figure-caption text-white">{{ $producto->nombre }}</figcaption>
                </figure>
            </div>
            <div class="col-12 col-md-8" id="cont">
                <div class="row g-0">
                    <div class="col-12 card-body">
                        <div class="row">
                            <h1 class="col card-title">{{ $producto->nombre }} </h1>
                            <p><a class="btn btn-outline border-3 disabled etiqueta" href="#">{{ $tipo->nombre }}</a></p>
                        </div>

                        <h3 class="card-text">
                            @if($producto->observacion)
                            <b>Observacion: </b> <br>{{ $producto->observacion }}
                            @endif
                        </h3>
                        <div class="row d-flex justify-content-between align-items-end">
                            <div class="col-12 col-md-5 ms-5">
                            <h5 class="card-text ">Precio: {{ $producto->precio }}€
                                <a href="{{ route('carrito.index',$producto) }}">
                                    <span class=" ms-3 material-symbols-outlined">add</span>
                                </a>
                               
                            </h5>
                            </div>
                            <div class="d-none d-md-block col-3 me-5 mt-5">
                                    <img src="{{ asset('images/simboloEgibide.png') }}" class="img-fluid" id="cont1">
                                </div>
                        </div>
                    </div>
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
    @include('layouts.cards')
</div>

@endsection