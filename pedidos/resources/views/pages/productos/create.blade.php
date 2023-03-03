@extends('layouts.layout')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 my-5">
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
            </div>
        @endif
        <div class="card">
            <div class="card-header">Nuevo producto</div>
            <div class="card-body">
                <form class="row g-3" method="POST" action="{{ route('producto.store') }}" id="empForm">
                    @csrf
                    <div class="col-md-6 required">
                        <label for="nombre" class="form-label">Nombre Producto</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                        @if ($errors->has('nombre'))
                            <span class="text-danger">{{ $errors->first('nombre') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6 required">
                        <label for="tipo" class="form-label">Tipo</label>
                        <select id="tipo" class="form-select" name="idTipo">
                            <option value="0" selected> Tipo... </option>
                            @foreach($tipos as $tipo)
                                <option value="{{$tipo->id}}">{{ $tipo->nombre }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('idTipo'))
                            <span class="text-danger">{{ $errors->first('idTipo') }}</span>
                        @endif
                    </div>
                    <div class="col-6 required">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" step="0.01" min="0" class="form-control" name="precio" id="cif">
                        @if ($errors->has('precio'))
                            <span class="text-danger">{{ $errors->first('precio') }}</span>
                        @endif
                    </div>
                    <div class="col-6 required">
                        <label for="pedidoMinimo" class="form-label">Pedido Minimo</label>
                        <input type="number" min="0" class="form-control" id="pedidoMinimo" name="pedidoMinimo">
                        @if ($errors->has('pedidoMinimo'))
                            <span class="text-danger">{{ $errors->first('pedidoMinimo') }}</span>
                        @endif
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
       
    
        <!-- Way 1: Display All Error Messages -->
        <!-- @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif -->
    </div>
</div>


@stop