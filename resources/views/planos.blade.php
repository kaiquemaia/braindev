@extends('layouts.master')

@section('content')
<main class="braindev-vh-100">
    <div class="container text-center mt-5 pt-5">


        <div class="painel-grid-dashboard container mt-4">
            <div class="sidebar">
                <div class="text card-dashboard" id="minha-conta" > Minha conta <i class="fa fa-user"></i> </div></a>
                <div class="text card-dashboard" id="pedidos" >  Pedidos <i class="fa fa-tag"></i></div>
                <div class="text card-dashboard" id="planos" > Planos <i class="fa fa-bars"></i></div>
                <div class="text card-dashboard" id="servicos" > Serviços <i class="fa fa-bars"></i></div>
                <div class="text card-dashboard" id="depoimento" > Depoimentos <i class="fa fa-bars"></i></div>
                
            </div>

            <div class="sidebar-right">


                <div class="meus-planos text-left">

                    
                   <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Nome do plano</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Preço</th>
                            <th scope="col" colspan="2">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="col">Plano Starter</th>
                            <th scope="col">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id repellat necessitatibus ab.</th>
                            <th scope="col">R$ 859,00</th>
                            <th scope="col" colspan="2">Ações</th>
                        </tr>
                        
                    </tbody>
                </table>
                </div>

            </div>
        </div>

    </div>
</main>

<!-- <script src="js/script.js"></script> -->
@endsection
