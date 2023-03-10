@extends('layouts.layout')
@section('content')
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
@if ($errors->any())
<div class="row justify-content-center">
    <div class="alert alert-danger col-11 p-md-5">
        @foreach ($errors->all() as $error)
        {{ $error }}<br />
        @endforeach
    </div>
</div>

@endif

<div class="card-group justify-content-center mt-5 mb-5" id='cardPrincipal'>
    <div class="card " id='formularioInvitado' style="max-width: 18rem;">
        <div class="card-header text-white">
            <h5>Invitado</h5>
        </div>
        <div class="card-body text-white">
            <form action="{{route('datosPersona.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}" placeholder="Nombre">
                    </div>
                    <div class="col-6">
                        <label for="Telefono">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="{{old('telefono')}}" placeholder="666777888">
                    </div>

                </div>

                <div class="row justify-content-start">
                    <div class="col-12">
                        <label class="sr-only" for="correo">Email</label>
                        <div class="input-group mb-2">
                            <div class="input-group-text">@</div>
                            <input type="text" class="form-control" id="correo" name="correo" value="{{old('correo')}}" placeholder="email">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-secondary mt-3">Continuar como invitado</button>
            </form>
        </div>
    </div>
    <div class="card text-white bg-secondary  " id='inicio' style="max-width: 30rem; ">
        <div class="card-header">
            <h5>Iniciar sesion</h5>
        </div>
        <div class="card-body text-white">
            <form action="{{route('cesta.ver')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="Contraseña">Contraseña</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}" placeholder="Password">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" id="togglePassword" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="form-check mt-1">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Recordar</label>
                </div>
                <button type="submit" id="btnMorado" class="btn mt-3">Acceder</button>
                <a role="button" href="#" id="registrar" class="btn btn-link mt-3" value="Nuevo usuario">Darse de alta</a>
            </form>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <div class="card text-white bg-secondary" id="vista" style="display:none;">
            <div class="card-header">
                <h5>Nuevo usuario</h5>
            </div>
            <div class="card-body">
                <form action="{{route('crearusu.normal')}}" class="row" method="post">
                    @csrf
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <label for="Nombre">Nombre</label>
                                <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}" placeholder="Nombre">
                            </div>
                            <div class="col-6">
                                <label for="telefono">telefono</label>
                                <input type="number" class="form-control" name="telefono" value="{{old('telefono')}}" placeholder="666555444">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="Correo">Correo</label>
                                <input type="email" class="form-control" name="correo" value="{{old('correo')}}" placeholder="Correo">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12">
                                <label for="Contraseña">Contraseña</label>
                                <input type="password" class="form-control" name="contrasena" value="{{old('contrasena')}}">
                            </div>
                            <div class="col-12">
                                <label for="Confirmar">Confirmar Contraseña</label>
                                <input type="password" class="form-control" name="confirmar" value="{{old('confirmar')}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <button type="submit" id='btnSubmit' class="btn  mt-3">Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="row justify-content-center">
    <div class="col-11 border p-md-5">


    </div>
</div>
@endsection