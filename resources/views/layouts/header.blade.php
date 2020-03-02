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
</head>
<body>

    <nav class="navbar navbar-expand-lg braindev-bg-purple row py-3 ">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img/logo-rocketseat.svg" alt="" width="60px" height="40px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link nav-light" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-light" href="#servicos">Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-light" href="#planos">Planos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-light" href="">Contato</a>
              </li>
          </ul>
          <span class="navbar-button">
            <button class="btn btn-login-header px-4">Login</button>
          </span>
        </div>
        </div>
      </nav>

        <main class="pb-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
