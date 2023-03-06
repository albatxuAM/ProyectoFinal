@extends('layouts.layout')
@section('content')
<div class="row mt-4 d-flex justify-content-center"><!-- PLATOS -->
    <div class="col-10 col-md-11 col-lg-10">
        <a class="btn btn-outline-success float-end" href="{{ route('productos.create') }}"> Nuevo Producto </a>
        <h1>PLATOS PARA LLEVAR</h1>
        <div class="row gy-3 mt-4">

            <div class="col-12 col-md-3"><!-- Col del groupList -->
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" href="{{ route('productos.catalogo') }}" role="tab" aria-controls="list-profile"> TODOS </a>
                    @foreach($tipos as $tipo)
                        <a class="list-group-item list-group-item-action" href="{{ route('productos.catalogo', $tipo->id) }}" role="tab" aria-controls="list-profile">{{ $tipo->nombre }}</a>
                    @endforeach
                </div>
            </div>

            

            <!-- COL DEL CONTENIDO -->
                <div class="col-12 col-md-9 tab-content" id="nav-tabContent">
                    <div class=" row tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <div class="col-12 px-3 plato card-group">
                            <div class="row">
                            @include('layouts.cards')
                            
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
        {{ $productos->links() }}

    </div>
</div>
@endsection