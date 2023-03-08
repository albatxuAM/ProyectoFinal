@foreach($productos as $producto)
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 px-3 plato card-group">
        <div class="card border-light">
            <img class="card-img-top img-fluid img-thumbnail" alt="{{$producto->name}}" 
                @if( file_exists('images/'.$producto->id.'.png') )
                    src="{{ asset('images/'.$producto->id.'.png') }}" 
                @else 
                    src="{{ asset('images/placeholder.png') }}" 
                @endif
            />
            <div class="card-body">
                <div class="card-title">
                    <h5> {{ $producto->nombre }} </h5>
                </div>
                <div class="card-text">
                    <p> Precio: {{ $producto->precio }}€</p>
                </div>
            </div>
            @if (Auth::user() and Auth::user()->admin)
                <div class="card-footer text-muted d-flex justify-content-between">
                    {{-- <a class="btn btn-outline-secondary" href="{{ route('productos.edit', $producto) }}"> Editar </a> --}}
                    <form action="{{ route('productos.edit', $producto) }}" method="POST">
                        @csrf
                        <button class="btn btn-outline-secondary">Editar</button>
                    </form>
                    <form action="{{ route('productos.destroy', $producto) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-outline-danger">Eliminar</button>
                    </form>
                </div>
            @else
                <div class="card-footer text-muted">
                    <a class="btn btn-outline-secondary" href="{{ route('productos.show', $producto) }}">Opciones</a> <!-- ENLACE A FORMULARIO PARA INICIAR SESION O SEGUIR COMO INVITADO -->
                    <a class="ms-5" href="{{ route('carrito.index',$producto) }}">Lo quiero </a>
                </div>
            @endif
        </div>
    </div>
@endforeach  