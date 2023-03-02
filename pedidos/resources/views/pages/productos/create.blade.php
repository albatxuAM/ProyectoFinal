@extends('layouts.layout')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <h1 class="display-3 text-center"></h1>
        <div class="card">
            <div class="card-header">{{ __('Nuevo producto') }}</div>
            <div class="card-body">
                <form class="row g-3" method="POST" action="{{ route('producto.store') }}" id="empForm">
                @csrf
                    <div class="col-md-6">
                        <label for="nombre" class="form-label">Nombre Producto</label>
                        <input type="email" class="form-control" id="nombre">
                    </div>
                    <div class="col-md-6">
                        <label for="tipo" class="form-label">Tipo</label>
                        <select id="tipo" class="form-select">
                            <option selected>Choose...</option>
                            <option value="FRITOS">FRITOS</option>
                            <option value="ENTRANTES">ENTRANTES</option>
                            <option value="PESCADOS">PESCADOS</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" min="0" class="form-control" name="pMin" id="cif">
                    </div>
                    <div class="col-6">
                        <label for="pedidoMinimo" class="form-label">Pedido Minimo</label>
                        <input type="number" min="0" class="form-control" id="pedidoMinimo">
                    </div>
                    <div class="col">   
                        <label for="formFile" class="form-label">Imagen producto</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary float-end">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop