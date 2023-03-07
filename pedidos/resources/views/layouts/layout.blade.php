</html>


@include('layouts.header')

<body>

    <div class="container-fluid">
        @include('layouts.navbar')
        @yield('content')

        @include('layouts.footer')
    </div>
</body>
</html>
