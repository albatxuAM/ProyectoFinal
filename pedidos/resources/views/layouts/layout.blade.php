<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body class="d-flex flex-column min-vh-100">

        @include('layouts.navbar')
        <div class="container-fluid">
                @yield('content')
        </div>
        @include('layouts.footer')
</body>
</html>
