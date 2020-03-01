<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>BrainDev | Login</title>
</head>
<body id="body-login2">

    <div class="container parent" id="div-master-login2">
        <div class="row">
            <!-- ----------- LOGO -->
            <div class="col-12 pt-3" id="grid-logo">
                <img  class="rounded mx-auto d-block" width="230" src="{{asset('img/1x/icon-4.png') }}" alt="Logo">
            </div>
            

            <!-- ----------- FORM -->
            <div class="col-12 pt-2 pb-1 px-0" id="grid-form">
                <form class="container">
                <div class="form-group">
                        <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Senha">
                    </div>
                </form>
            </div>

            <!-- ----------- CHECKBOX -->
            <div class="col-6 text-center" id="grid-checkbox">
                <input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label pl-3" for="inlineCheckbox1">Lembrar senha</label>
            </div>

            <!-- ----------- FORGET -->
            <div class="col-6 text-center" id="grid-forget">
                <span><a href="" data-toggle="modal" data-target="#exampleModal" id="div-span">Esqueci minha senha</a></span>
            </div>

            <!-- ----------- BUTTON -->
            <div class="col-12 py-4" id="grid-button">
                <button type="button" class="btn-braindev btn-block">Login</button>
            </div>

            <!-- ----------- CADASTRO -->
            <div class="col-12 text-center" id="grid-cadastro">
                <span>Não tem conta? <a href="http://localhost:8000/cadastro" data-toggle="modal" data-target="#exampleModal" id="div-span">Cadastre-se</a></span>
            </div>

        </div>
    </div>
    
    <!-- ---------- JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>