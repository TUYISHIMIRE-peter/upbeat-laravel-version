<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <nav class="navbar d-flex justify-content-center rounded navbar-expand-lg navbar-light color-light bg-primary container"
                    style="position:sticky; top:5;">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a class="navbar-brand d-none d-sm-block" href="index.php"><img width="60" height="60"
                                src="assets/img/logo/logo.png" alt="Logo" /></a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 col-md-9 ">
                                <li class="nav-item">
                                    <a class="nav-link text-light" aria-current="page"
                                        href="index.php#landingslide">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="index.php#services">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="index.php#shop">Shop</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="index.php#landingContact">Contact us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex justify-content-end">
                            <button type="button" class="btn btn-dark" onclick="window.location.href='cart.php'">
                                <span class=" d-inline p-2">
                                    <i class="fas fa-shopping-cart"></i> Cart
                                </span>
                                <span class="badge bg-secondary">
                                    <?php echo count(session('cart') ?? []); ?>
                                </span>
                            </button>
                        </div>
                    </div>
                </nav>


                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest

                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"></a>
                    </li>
                @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ route('patient.create') }}">Create Patient</a>
                                <a class="dropdown-item" href="{{ route('patient.index') }}">All Patients</a>


                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
    </div>
    </nav>

    <main class="container-fluid">
        @yield('content')
    </main>
    </div>
</body>

</html>
