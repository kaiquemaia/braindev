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
    <div class="conatiner px-5" id="cont-master">
        <div class="row mt-5" id="div-titulo">
            <h1 class="col-12 text-center"><b>Contate-nos</b></h1>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mt-5">
                <h3>Telefone</h3>
                <span>(11) 9xxxx - xxxx</span>
                <hr>
                <h3>Email</h3>
                <span>suporte@beymind</span>
                <hr>
                <div>
                    <a href="http://instagram.com"><img src="assets/img/instagram-logo.png" width="40px" class="pr-2" alt="" class=""></a>
                    <a href="http://facebook.com"><img src="assets/img/facebook.logo.png" width="40px" class="pr-2" alt="" class=""></a>
                    <a href="http://twitter.com"><img src="assets/img/twitter-logo.png" width="40px" class="pr-2" alt="" class=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mt-5">
            <form>
                <h3>Escreva para nós</h3>
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
        <div class="row my-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14629.55518769143!2d-46.6889560302246!3d-23.55447584999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e0!4m0!4m0!5e0!3m2!1spt-BR!2sbr!4v1575298739872!5m2!1spt-BR!2sbr" width="100%" height="350px" frameborder="0" style="border:1;" allowfullscreen=""></iframe>
        </div>
    </div>
</body>
</html>