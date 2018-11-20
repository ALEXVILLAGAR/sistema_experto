<head>
    <meta charset="utf-8">
        <!-- CSRF Token -->
        <meta content="{{ csrf_token() }}" name="csrf-token">
            <title>
                {{ config('app.name', 'Diagnostic Expert') }}
            </title>
            <link href="images/favicon.ico" rel="icon" type="image/x-icon">
                <!-- Fonts -->
                <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" rel="stylesheet">
                    <!-- Scripts -->
                    <script src="{{ asset('js/app.js') }}">
                    </script>
                    <script src="{{ asset('js/jquery.js') }}">
                    </script>
                    <script src="{{ asset('js/jquery-migrate-1.2.1.js') }}">
                    </script>
                    <script src="{{ asset('js/script.js') }}">
                    </script>
                    <script src="{{ asset('js/encuesta.js') }}">
                    </script>
                    <link href="https://fonts.gstatic.com" rel="dns-prefetch">
                        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
                            <link href="https://fonts.googleapis.com/css?family=Comfortaa:300" rel="stylesheet">
                                <!-- Styles -->
                                <link href="{{ asset('css/app.css') }}" rel="stylesheet">
                                    <link href=" {{ asset('css/grid.css') }}" rel="stylesheet">
                                        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
                                            <link href="{{ asset('css/camera.css') }}" rel="stylesheet">
                                                <link href="{{ asset('css/owl-carousel.css') }}" rel="stylesheet">
                                                    <link href="{{ asset('css/mi_css.css') }}" rel="stylesheet">
                                                        <link href="{{ asset('css/encuesta.css') }}" rel="stylesheet">
                                                            {{--
                                                            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
                                                            </script>
                                                            --}}
                                                        </link>
                                                    </link>
                                                </link>
                                            </link>
                                        </link>
                                    </link>
                                </link>
                            </link>
                        </link>
                    </link>
                </link>
            </link>
        </meta>
    </meta>
</head>
<header id="header">
    <div class="container">
        <div class="brand">
            <a href="/">
                <img src="{{asset('images/Logo.png')}}" width="300"/>
            </a>
        </div>
        <a class="fa-phone" href="callto:#">
            (036)-314-6789
        </a>
        <p>
            Contáctanos de una manera directa, durante las 24 horas del dia.
        </p>
    </div>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel stuck_container ">
            <div class="container ">
                <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                    <span class="navbar-toggler-icon">
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto sf-menu">
                        <!-- Authentication Links -->
                        <li class="nav-item op1">
                            <a href="./">
                                Inicio
                            </a>
                        </li>
                        <li class="nav-item op2">
                            <i>
                            </i>
                            <a href="{{ url('nosotros') }}">
                                Nosotros
                            </a>
                            <li class="nav-item op3">
                                <a class="text-white" data-target="#exampleModalCenter" data-toggle="modal">
                                    Contáctanos
                                </a>
                            </li>
                            @yield('opcion')
            @guest
                            <li class="nav-item op4">
                                <i>
                                </i>
                                <a href="{{ route('login') }}">
                                    Ingresar
                                </a>
                            </li>
                            <li class="nav-item op5">
                                <i>
                                </i>
                                <a href="{{ route('register') }}">
                                    Registrarme
                                </a>
                            </li>
                            @else
                            <li class="nav-item op5">
                                <i>
                                </i>
                                <a href="{{ url('pronostico') }}">
                                    Pronostico
                                </a>
                            </li>
                            <li class="nav-item op5">
                                <i>
                                </i>
                                <a href="{{ url('algoritmo') }}">
                                    Algoritmo
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" id="navbarDropdown" role="button" v-pre="">
                                    {{ Auth::user()->name }}
                                    <span class="caret">
                                    </span>
                                </a>
                                <div aria-labelledby="navbarDropdown" class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                                        Salir
                                    </a>
                                    <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    @include('modal_contacto')
</header>
<!-- /header -->
