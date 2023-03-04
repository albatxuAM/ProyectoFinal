    @foreach($productos as $producto)
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 px-3 plato card-group">
        <div class="card border-light">
            <img class="card-img-top img-fluid img-thumbnail" alt="Bootstrap Thumbnail Second" src="{{ asset('images/croqueta.png') }}" />
            <div class="card-body">
                <div class="card-title">
                    <h5> {{ $producto->nombre }} </h5>
                </div>
                <div class="card-text">
                    <p> Precio: {{ $producto->precio }}€</p>
                </div>
            </div>
            <div class="card-footer text-muted">
                <a class="btn btn-outline-secondary" href="{{ route('productos.show', $producto) }}">Opciones</a> <!-- ENLACE A FORMULARIO PARA INICIAR SESION O SEGUIR COMO INVITADO -->
                
            </div>
            <a class="" href="{{ route('carrito.index',$producto) }}">Añadir a la cesta</a>
        </div>
    </div>
    @endforeach
    
    