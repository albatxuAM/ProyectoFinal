@extends('layouts.layout')
@section('content')
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<div class="row ">
    <div class="col-4 border p-md-5" style="min-height: 75%;">
        <h4 class="card-title">Iniciar Session / Registro</h4>
        <form action="{{route('crearusu.iniciosession')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="Contraseña">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}" placeholder="Password">
            </div>
            <div class="form-check mt-1">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Recordad</label>
            </div>
            <button type="submit" class="btn btn-primary mt-3">registrar</button>
            <a role="button" href="#" id="registrar" class="btn btn-link mt-3" value="Nuevo usuario">Nuevo usuario</a>
           </form>  
           
       
    </div>
    <div id class="col-8  border p-md-5 " style="min-height: 75%;">
        <h4 class="card-title">Sin Registrarse</h4>
        <form action="#" method="get">
            @csrf
            <div class="row">
                <div class="col-6">
                    <label for="inputPassword4">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}" placeholder="Nombre">
                </div>
                <div class="col-6">
                    <label for="inputEmail4">Correo</label>
                    <input type="email" class="form-control" id="correo" name="correo" value="{{old('correo')}}" placeholder="Correo">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10">
                    <label for="Direccion">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" value="{{old('direccion')}}" placeholder="1234 Main St">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Nuevo</button>
        </form>
    </div>
</div>
<div id="vista" class="row border  p-md-5" style="display:none;">
<h4 class="card-title">Registrar nuevo usuario</h4>
    <form action="{{route('crearusu.admin')}}" method="get">
            @csrf
            <div class="row">
                <div class="col-6">
                    <label for="inputPassword4">Nombre</label>
                    <input type="text" class="form-control"  name="nombre" value="{{old('nombre')}}" placeholder="Nombre">
                </div>
                <div class="col-6">
                    <label for="inputEmail4">Correo</label>
                    <input type="email" class="form-control" name="correo" value="{{old('correo')}}" placeholder="Correo">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10">
                    <label for="Direccion">Direccion</label>
                    <input type="text" class="form-control" name="direccion" value="{{old('direccion')}}" placeholder="1234 Main St">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Nuevo</button>
        </form>
</div>
@vite(['resources/js/registrar.js'])
@endsection