<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/contato.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="conatiner" id="cont-master">
        
        {{-- TITULO --}}
        <div class="row my-5" id="div-titulo">
            <h2 class="col-12 text-center h2-black">Entre em <b class="title">contato</b></h2>
        </div>

        {{-- FORM --}}
        <div class="row py-5 px-5" style="background-color:black" id="contato">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <h3 class="title"><b>Telefone</b></h3>
                <h5 style="color:white">(11) 9xxxx - xxxx</h5>
                <hr>
                <h3 class="title"><b>Email</b></h3>
                <h5 style="color:white">suporte@braindev.com</h5>
                <hr>
                <div>
                    <h3 class="title"><b>Social</b></h3>
                    <a href="http://instagram.com"><img src="{{asset('img/instagram-logo.svg')}}" width="40px" class="pr-2" alt="" class=""></a>
                    <a href="http://facebook.com"><img src="{{asset('img/facebook-logo.svg')}}" width="40px" class="pr-2" alt="" class=""></a>
                    <a href="http://twitter.com"><img src="{{asset('img/twitter-logo.svg')}}" width="40px" class="pr-2" alt="" class=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <form>
                <h3 class="title"><b>Escreva para nós</b></h3>
                <div class="form-row mt-3">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-4">
                        <input type="text" class="form-control" placeholder="Nome">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-4">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-12 form-group" id="form-box">
                        <textarea type="text" class="form-control" placeholder="Conteúdo" rows="6"></textarea>
                    </div>
                </div>
            </form>
            </div>
        </div>

        {{-- MAPA --}}
        <div class="row my-5 px-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14629.55518769143!2d-46.6889560302246!3d-23.55447584999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e0!4m0!4m0!5e0!3m2!1spt-BR!2sbr!4v1575298739872!5m2!1spt-BR!2sbr" width="100%" height="350px" frameborder="0" style="border:1;" allowfullscreen=""></iframe>
        </div>
    </div>
</body>
</html>