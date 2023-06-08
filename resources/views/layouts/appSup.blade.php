<!doctype html>
<!--BARRA DE PRINCIPAL VISIUS Supervisors-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/public/imgs/logosup.ico">

    <title>{{ config('app.name', 'Visius') }}</title>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="/public/css/menusup.css">

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="p-3 m-0 border-0 bd-example">
    <div>
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark fuentepequenia" style="font-family: Century Gothic;">
            <div class="container-fluid">
                <a class="navbar-brand" href="http://127.0.0.1:8000/home">
                    
                    <img src="../imgs/logosup.ico" class="logo">

                    {{ config('app.name', 'Visius') }}
                    
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item coloropcion">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item coloropcion">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else                       
                                {{-- opciones ya trabajadas --}}                          

                            <li class="nav-item coloropcion">
                                <a class="nav-link active" href="/readUsers">Empleados</a>
                            </li>

                            <li class="nav-item coloropcion">
                                <a class="nav-link active" href="/createUser">Crear Tarea</a>
                            </li>

                            <li class="nav-item coloropcion">
                                <a class="nav-link active" href="/updateUser">Asignar Tarea</a>
                            </li>
                        </div>
                    </ul>
                    <div class="d-flex" role="search">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-family: century gothic;">
                        <li class="nav-item">
                            <a class="nav-link active coloropcion" aria-current="page" href="http://127.0.0.1:8000/mi_info_admin"><i class="bi bi-person-circle"></i> Mi Info</a>
                        </li>
                        <li class="nav-item dropdown coloropcion">
                            <a id="navbarDropdown" class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->role }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item fuentepequenia" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" >
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
            @endguest
        </ul>
    </div>
            </div>
        </nav>

    <!--About section-->
    <section class="bg-light py-5">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                @yield('banner')
                                @yield('content')
                                @yield('contenido1')
                                @yield('contenido2')
                                @yield('contenido3')
                                @yield('contenido4')
                                <!--
                                    <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
                                    <a class="text-gradient" href="#!"><i class="bi bi-facebook"></i></a>
                                    <a class="text-gradient" href="#!"><i class="bi bi-instagram"></i></a>
-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

      <!--Footer-->
      <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; Visius Inc. 2023</div></div>
                    <div class="col-auto">
                        <a class="small" href="#!">Privacidad</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Términos</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Contacto</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <script src="js/scripts.js"></script>
        
    </div>
</body>
</html>
