<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Diagnostic Expert') }}</title>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-1.2.1.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/encuesta.js') }}"></script>
    
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href=" {{ asset('css/grid.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/camera.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mi_css.css') }}">
    <link rel="stylesheet" href="{{ asset('css/encuesta.css') }}">
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> --}}

</head>

<header id="header">
    
  <div class="container">
    <div class="brand"><a href="/"><img src="{{asset('images/Logo.png')}}" width="300"></a></div>
    <a href="callto:#" class="fa-phone">(036)-314-6789</a>
    <p>Contáctanos de una manera directa, durante las 24 horas del dia.</p>
  </div>

  <div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel stuck_container ">
      <div class="container ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto"></ul>
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto sf-menu">
            <!-- Authentication Links -->
            <li class="nav-item op1"><a href="./">Inicio</a></li>
            <li class="nav-item op2"> <i ></i><a href="{{ url('nosotros') }}">Nosotros</a>
            <li class="nav-item op3"><a href="{{ url('contacto') }}"">Contáctanos</a></li>           
            @yield('opcion')
            @guest
              <li class="nav-item op4"> <i ></i><a href="{{ route('login') }}">Ingresar</a></li>
              <li class="nav-item op5"> <i ></i><a href="{{ route('register') }}">Registrarme</a></li>
              @else
                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }} <span class="caret"></span></a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"> {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </div>
                </li>
            @endguest
          </ul>
        </div> 
      </div>
    </nav>
  </div>

</header><!-- /header -->