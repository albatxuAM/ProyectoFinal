</html>


@include('layouts.header')

<body>

    <div class="container-fluid">
        <p>{{Auth::user()}}</p>

        @include('layouts.navbar')
        @yield('content')

        @include('layouts.footer')
    </div>
</body>
</html>
