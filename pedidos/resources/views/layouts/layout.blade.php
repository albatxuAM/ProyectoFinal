@include('layouts.header')

<body>
<?php
session_start();

if (isset($_SESSION['carrito'])) {
    $carrito = $_SESSION['carrito'];
} else {
    $carrito = [];
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $carrito[] = $id;
    $_SESSION['carrito'] = $carrito;
}
?>
    <div class="container-fluid">
        @include('layouts.navbar')
        @yield('content')


        @include('layouts.footer')
    </div>
</body>
</html>