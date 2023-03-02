@extends('layouts.layout')
@section('content')
@vite(['resources/sass/app.scss', 'resources/js/app.js'])


<div class="card-group row">
    <div class="card col-4 h-100">

        <h4 class="card-title">IniciarSession/registro</h4>
     q   <form>
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="Contraseña">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Recordad</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
    <div class="card col-8 h-100">

        <h4 class="card-title">Sin Registrarse</h4>
        <form>
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="inputPassword4">Nombre</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="Nombre">
                </div>
                <div class="form-group col-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Nuevo</button>
        </form>

    </div>
</div>

</div>
@endsection