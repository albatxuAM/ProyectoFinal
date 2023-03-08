</html>

@include('layouts.header')

<body class="d-flex flex-column min-vh-100">

        @include('layouts.navbar')
        @yield('content')
        @include('layouts.footer')
</body>
</html>
