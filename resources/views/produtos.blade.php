@extends('layouts.header')

@section('content')

<div class="row px-5 py-3">


<div class="container bd-grid-2 pt-5 ">

    <img src="img/melhores-tecnologias.svg" class="img-fluid">

    <div class="col-sm container ">
            <h2 class="h2-white">Plano<b class="title">Pro</b></h2>
            <p class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero atque, quam eveniet temporibus dignissimos dicta velit facere magni? Consequatur neque, earum magnam saepe sit fuga incidunt inventore repellendus ex suscipit?</p>
            <button type="button" class="btn btn-braindev">CONTRATAR AGORA</button>
    </div>

</div>

{{-- Servicos descritos --}}
<div class="container py-5" id="servicos">
    <div class="container servicos-section">
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



@endsection
