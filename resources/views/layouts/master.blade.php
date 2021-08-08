<html lang="en">

<head>
    <title>ATCS - @yield('title')</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('scripts')
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
    @section('header')
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand p-0 g-0 b-0" href="/">
                    <div class="d-flex g-0 p-0 b-0">
                        <img class="d-inline-block align-self-center logo-image g-0 p-0 b-0" alt="flight-logo" src="{{ asset('images/favicon.svg') }}">
                        <div class="align-self-center ps-1 g-0 p-0 b-0">
                            ATCS
                        </div>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">

                        @auth
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/dashboard">Control</a>
                        </li>
                        @endauth

                        @guest
                        <li class="nav-item active">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                        @endguest

                    </ul>
                    @guest
                    <div class="d-flex px-md-1">
                        <div class="col-xs-6">
                            <a type="button" href="/register" class="btn btn-outline-light">Sign Up</a>
                        </div>
                    </div>
                    @endguest
                    @auth
                    <div class="d-flex px-md-1">
                        <div class="col-xs-6">
                            <a type="button" href="/logout" class="btn btn-outline-light">Logout</a>
                        </div>
                    </div>
                    @endauth
                </div>
            </div>
        </nav>
    </header>
    @show
    @yield('content')
</body>

@section('footer')
<footer>
    <!-- Thanks for reading. -->
</footer>
@show

</html>