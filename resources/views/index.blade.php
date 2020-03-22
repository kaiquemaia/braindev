@extends('layouts.master')

@section('content')

<div class="row header-slider bg-light">
    <div class="container header-section">
        <div class="">
            <h2 class="h2-black">Nós alcançamos <b class="title">Resultados</b></h2>
            <p class="">Aqui fazemos acontecer, se você tem uma ideia é só trazer que transformaremos ela em realidade</p>
            <button type="button" class="btn btn-braindev mt-5" data-toggle="modal" data-target=".produto1">Conhecer</button>
        </div>
        <div class=" text-center">
            <img src="img/melhores-tecnologias.svg" alt="" class="img-fluid">
        </div>
    </div>
</div>

{{-- Servicos descritos --}}
<div class="row servicos-section-home" id="servicos">
    <div class="container servicos-section">
        <div class="">
            <h2 class="h2-white">Nossos serviços</h2>
        </div>
        <div class="nossos-servicos">
            <div class="card-servicos">
                <h3 class="title">Performance</h3>
                <p class="card-text">Google Adwords, Facebook Ads, Remarketing no Google, Remarketing no Facebook, Native Ads, Outbrain, Taboola</p>
            </div>
            <div class="card-servicos">
                <h3 class="title">Business intelligence</h3>
                <p class="card-text">Google Analytics, Google Tag Manager, Monitoramento de E-Commerce, Otimização de Conversão (CRO), Testes A/B</p>
            </div>
            <div class="card-servicos">
                <h3 class="title">Criação e Desenvolvimento</h3>
                <p class="card-text">Criação de Sites, Criação de WordPress, Criação de Landing Pages, Criação de Infográficos</p>
            </div>
            <div class="card-servicos">
                <h3 class="title">Facebook e Redes Sociais</h3>
                <p class="card-text">Gerimos suas Mídia Sociais, sejam elas: Facebook, Instagram</p>
            </div>
            <div class="card-servicos">
                <h3 class="title">Identidade Visual</h3>
                <p class="card-text">Criação de Sites, Criação de WordPress, Criação de Landing Pages, Criação de Infográficos</p>
            </div>
            <div class="card-servicos">
                <h3 class="title">Google Meu Negócio</h3>
                <p class="card-text">Criação de Sites, Criação de WordPress, Criação de Landing Pages, Criação de Infográficos</p>
            </div>


        </div>
    </div>
</div>

<div class="row header-slider bg-light">
    <div class="container header-section">
        <div class="">
            <h2 class="h2-black">O melhor para sua <b class="title">Empresa</b></h2>
            <p class="">Escolha o que melhor irá ajudar sua empresa a alavancar</p>
        </div>
        <div class=" text-center">
            <img src="img/melhores-tecnologias.svg" alt="" class="img-fluid">
        </div>
    </div>
</div>


<div class="container planos py-5">

    {{-- Section planos --}}
<section class="row" id="planos">
    <article class="col-12 my-5 d-flex flex-column justify-content-center align-items-center text-center">
        <h2 class="h2-white">Escolha seu <b class="title">plano</b></h2>
    </article>
</section>

<div class="card-deck">

    <div class="card shadow-lg servicos">
        <div class="card-body text-center p-4">
            <img src="img/step-3.svg" alt=""  width="150px" class="pb-5 img-fluid">
            <h3><b>Starter</b></h3>
            <p class="card-text p-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga necessitatibus error pariatur mollitia facilis. Excepturi obcaecati
            </p>
            <button type="button" class="btn btn-braindev btn-lg btn-block" data-toggle="modal" data-target=".produto1">Conhecer</button>
         </div>
    </div>
    <div class="card servicos shadow-lg">
        <div class="card-body text-center p-4">
            <img src="img/step-7.svg" alt=""  width="150px" class="pb-5 img-fluid">
            <h3><b>Pro</b></h3>
            <p class="card-text p-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga necessitatibus error pariatur mollitia facilis. Excepturi obcaecati
            </p>
            <button type="button" class="btn  btn-braindev btn-lg btn-block" data-toggle="modal" data-target=".produto2">Conhecer</button>
         </div>
    </div>
    <div class="card shadow-sm servicos">
        <div class="card-body text-center p-4">
            <img src="img/step-8.svg" alt=""  width="150px" class="pb-5 img-fluid">
            <h3><b>Custom</b></h3>
            <p class="card-text p-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga necessitatibus error pariatur mollitia facilis. Excepturi obcaecati
            </p>
            <button type="button" class="btn btn-braindev btn-lg btn-block" data-toggle="modal" data-target=".produto3">Conhecer</button>
         </div>
    </div>
</div>

<!-- --------- Modal the products ------------ -->

@extends('layouts.produto1')
@extends('layouts.produto2')
@extends('layouts.produto3')
@extends('layouts.produtos-modal')


<!-- --------- End Modal --------------------- -->


</div>

<section class="depoimento bg-light" id="id_depoimento">
    <div class="depoimento-header container">
        <section class="row pt-5" id="planos">
            <article class="col-12 my-5 d-flex flex-column justify-content-center align-items-center text-center">
                <h2 class="h2-black">Depoimen<b class="title">tos</b></h2>
            </article>
        </section>
        <div class="container" >
            <div class="container p-3 row">

                <div class="depoimentos text-center">
                    <div class="card-depoimentos">
                        <div class="row">
                            {{-- <img class="col-6" src="" alt=""> --}}
                            <h3 class="title col-12">Luís Marques</h3>
                        </div>
                        <p class="card-text-depoimentos">A BrainDev tem respondido rapidamente a todas as minhas solicitações com alto profissionalismo. O sistema tem uma excelente tecnologia, é intuitivo e moderno. Recomendo a quem quer ter um website com muita qualidade e preços acessíveis.</p>
                    </div>
                    <div class="card-depoimentos">
                        <div class="row">
                            {{-- <img class="col-6" src="" alt=""> --}}
                            <h3 class="title col-12">Paulo Filipe</h3>
                        </div>
                        <p class="card-text-depoimentos">Os formatos personalizáveis da BrainDev permitem utilização para vários tipos de actividade. Do simples blog a um autêntico jornal em versão digital. É fácil editar e actualizar constantemente, com conteúdos que vão para além do texto: vídeos, fotos, gráficos, ficheiros, etc. Uma solução muito equilibrada que permite apresentar um produto digital de qualidade sem grandes custos</p>
                    </div>
                    <div class="card-depoimentos">
                        <div class="row">
                            {{-- <img class="col-6" src="" alt=""> --}}
                            <h3 class="title col-12">Adua Guerra Santos</h3>
                        </div>
                        <p class="card-text-depoimentos">A Webnode tem respondido a todas as minhas solicitações e questões com profissionalismo e eficácia notável. Sente-se que para além da tecnologia há um relacionamento humano fundamental na partilha de conhecimentos e na vida.</p>
                    </div>
                    <div class="card-depoimentos">
                        <div class="row">
                            {{-- <img class="col-6" src="" alt=""> --}}
                            <h3 class="title col-12">Edmilson Nascimento</h3>
                        </div>
                        <p class="card-text-depoimentos">Um serviço de primeira! O sistema é simplesmente maravilhoso: intuitivo, bonito e moderno. Superou todas as minhas expectativas.</p>
                    </div>
                    <div class="card-depoimentos">
                        <div class="row">
                            {{-- <img class="col-6" src="" alt=""> --}}
                            <h3 class="title col-12">Tiago Moura</h3>
                        </div>
                        <p class="card-text-depoimentos">É muito intuitivo construir sites na BrainDev. É fácil de usar e deixar o site com uma aparência profissional.Todas as dúvidas e questões são prontamente respondidas pela excelente equipa técnica e de suporte. Recomendo!</p>
                    </div>
                    <div class="card-depoimentos">
                        <div class="row">
                            {{-- <img class="col-6" src="" alt=""> --}}
                            <h3 class="title col-12">Mark Zuckerberg</h3>
                        </div>
                        <p class="card-text-depoimentos">Excellent attention from this BrainDev team, great feedback! I hope they stay that way.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection

