<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg braindev-bg-purple row py-3 ">
        <div class="container">
        {{-- <a class="navbar-brand" href="{{'/'}}"><img src="img/logo-rocketseat.svg" alt="" width="60px" height="40px"></a> --}}
        <h3>< Braindev ></h3>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link nav-light" href="{{ url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-light" href="{{ url('/#servicos')}}">Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-light" href="{{ url('/#planos')}}">Planos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-light" href="{{ url('contato')}}">Contato</a>
              </li>
          </ul>
          @guest
              @if (Route::has('login'))
                <span class="navbar-button">
                  <button class="btn btn-login-header px-4" onclick="location.href='{{ route('login') }}'" target="_blank">Login</button>
              @endif

              @else
                  <ul class="auth-login">
                    <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> Olá,
                           {{ Auth::user()->name }} <span class="caret"></span>
                      </a>
    
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ url('/') }}">
                              {{ __('Minha conta') }}
                          </a>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Sair') }}
                          </a>
    
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                      
                  </li>
                  </ul>

            @endguest
          </span>
        </div>
        </div>
      </nav>

        <main class="">
            @yield('content')
        </main>
    </div>

    <footer class="row braindev-bg-dark">
      <div class="container footer-braindev">
        
          <div class="info-contato">
            <h3>Brain <b class="title">dev</b></h3>
            <p>A Braindev é uma agência focada em resultado On e Off de nossos clientes</p>
          </div>
          <div class="info-contato">
            <h3>Links</h3>
            <ul>
              <li>Home</li>
              <li>Serviços</li>
              <li>Planos</li>
              <li>Contato</li>
            </ul>
          </div>
          <div class="info-contato">
            <h3>Informações de <b class="title">contato</b></h3>
            <ul>
              <li><i class="fa fa-phone" aria-hidden="true"></i> (11) 94179-1342</li>
              <li><i class="fa fa-envelope" aria-hidden="true"></i> oi@braindev.com.br</li>
              <li><i class="fa fa-map-marker" aria-hidden="true"></i> Av. Dr. Cardoso de Melo, 90 - Vila Olímpia, São Paulo - SP, 04548-000</li>

            </ul>

          </div>
      </div>

     <div class="row braindev-bg-card-dark footer-cop ">
      <div class="container bd-grid-2">
          <div class="cop mt-1">
            <h6><i class="fa fa-copyright" aria-hidden="true"></i> <span class="title">Braindev</span> | Todos os direitos reservados</h6>
          </div>
      </div>
      
     </div>

       
    </footer>


</body>
</html>
