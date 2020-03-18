@extends('layouts.header')

@section('content')

<div class="row header-slider bg-light">
    <div class="container header-section">
        <div class="">
            <h2 class="h2-black">Nós alcançamos <b class="title">Resultado</b></h2>
            <p class="">Aqui fazemos acontecer, se você tem uma ideia é só trazer que transformaremos ela em realidade</p>
            <button type="button" class="btn btn-braindev" data-toggle="modal" data-target=".produto1">Conhecer</button>
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
            <h2 class="h2-black">Nós alcançamos <b class="title">Resultados</b></h2>
            <p class="">Aqui fazemos acontecer, se você tem uma ideia é só trazer que transformaremos ela em realidade</p>
            <button type="button" class="btn btn-braindev" data-toggle="modal" data-target=".produto1">Conhecer</button>
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
                            <img class="col-6" src="" alt="">
                            <h3 class="title col-6">@nome</h3>
                        </div>
                        <p class="card-text-depoimentos">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores velit repellendus ad exercitationem porro, quia, perferendis tempore corporis deserunt, nisi labore placeat. Necessitatibus rem delectus dicta eius eum voluptatibus est.</p>
                    </div>
                    <div class="card-depoimentos">
                        <div class="row">
                            <img class="col-6" src="" alt="">
                            <h3 class="title col-6">@nome</h3>
                        </div>
                        <p class="card-text-depoimentos">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non velit eveniet doloremque dicta reiciendis, laudantium quibusdam quas modi sint doloribus, ab beatae dolorum ad magnam adipisci alias nesciunt? Exercitationem, adipisci.</p>
                    </div>
                    <div class="card-depoimentos">
                        <div class="row">
                            <img class="col-6" src="" alt="">
                            <h3 class="title col-6">@nome</h3>
                        </div>
                        <p class="card-text-depoimentos">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat, dignissimos repellat! Debitis non at ipsa distinctio eaque, culpa natus iure doloribus dolore architecto modi est, cupiditate quo fugiat error quam.</p>
                    </div>
                    <div class="card-depoimentos">
                        <div class="row">
                            <img class="col-6" src="" alt="">
                            <h3 class="title col-6">@nome</h3>
                        </div>
                        <p class="card-text-depoimentos">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam nobis magnam veritatis, dicta iste aut vel deserunt quidem id. Voluptate quibusdam corrupti blanditiis inventore hic cupiditate quidem rerum ipsam autem?</p>
                    </div>
                    <div class="card-depoimentos">
                        <div class="row">
                            <img class="col-6" src="" alt="">
                            <h3 class="title col-6">@nome</h3>
                        </div>
                        <p class="card-text-depoimentos">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea dignissimos cumque quia nihil quas! Nam, magnam? Dignissimos laborum facilis magni in at ab, illum, soluta eos incidunt esse quam quas!</p>
                    </div>
                    <div class="card-depoimentos">
                        <div class="row">
                            <img class="col-6" src="" alt="">
                            <h3 class="title col-6">@nome</h3>
                        </div>
                        <p class="card-text-depoimentos">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea dignissimos cumque quia nihil quas! Nam, magnam? Dignissimos laborum facilis magni in at ab, illum, soluta eos incidunt esse quam quas!</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection

