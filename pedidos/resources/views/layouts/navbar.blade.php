<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <img src="{{ asset('images/logo.png') }}" class="" alt="logo restaurante">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Para llevar
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <li><a class="dropdown-item" href="#">Fritos</a></li>
                        <li><a class="dropdown-item" href="#">Entrantes</a></li>
                        <li><a class="dropdown-item" href="#">Pescados</a></li>
                        <li><a class="dropdown-item" href="#">Carnes</a></li>
                        <li><a class="dropdown-item" href="#">Semifrios</a></li>
                        <li><a class="dropdown-item" href="#">Tartas</a></li>
                        <li><a class="dropdown-item" href="#">Variedades</a></li>
                    </ul>
                </li>

            </ul>
            

            <span class="material-symbols-outlined">
                shopping_cart
            </span>
            <a class="cart-customlocation" href="https://latotedice.com/?page_id=8" title="View Cart">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span class="custom-cart-count">0</span>
            </a>

        </div>
    </div>
</nav>