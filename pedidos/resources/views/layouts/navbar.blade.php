<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" class="d-none d-md-block" alt="logo restaurante"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-5" id="navbarSupportedContent">
            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                {{-- @auth --}}
                    {{-- @if (Auth::user()->admin) --}}
                @guest  
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pedidos.index') }}">Pedidos Pendientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('productos.catalogo') }}">Catalogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Estadisticas</a>
                    </li>
                @endguest 
                    {{-- @endif --}}
                {{-- @endauth  --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Para llevar
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('productos.index', 0) }}"> TODOS </a></li>
                        <li><hr class="dropdown-divider"></li>
                        @foreach($tipos as $tipo)
                        <li><a class="dropdown-item" href="{{ route('productos.index', $tipo->id) }}">{{ $tipo->nombre }}</a></li>
                        @endforeach
                    </ul>
                </li>
                
            </ul>
            <form class="d-flex mx-4" action="{{ route('productos.index', 0) }}" >
                <input class="form-control me-2" type="search" placeholder="Buscar" name="busqueda" value="@if(isset($_GET['busqueda'])){{$_GET['busqueda']}}@endif" aria-label="Buscar">
                <button class="btn btn-outline-primary" type="submit">Buscar</button>
            </form>
            
            @auth
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" id="login" class="bi bi-box-arrow-in-right me-4" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                </svg>
            @endauth  
           
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" id="carrito" class="bi bi-cart2" viewBox="0 0 16 16">
                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
            </svg>

        </div>
    </div>
</nav>