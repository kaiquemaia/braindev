@extends('layouts.header')

@section('content')

    <main class="row">
        <div class="container py-5 text-center w-50">
            <h2 class="h2-white"> Finalize seu <b class="title"> Cadastro</b></h2>

            <div class="checkout braindev-bg-card-dark p-5 container mt-5 ">

                <form class="container ">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Digite seu Nome *" required>
                      </div>
                      <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Nome da empresa *" required>
                      </div>
                      <div class="form-group col-md-12">
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Digite seu Email *" required>
                      </div>
                      <div class="form-group col-md-6">
                        <input type="tel" class="form-control" id="inputPassword4" placeholder="Digite seu Telefone *" required>
                      </div>
                      <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="inputAddress" placeholder="Seu endereço *" required>
                      </div>

                      <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="inputCity" placeholder="Cidade">
                      </div>
                      <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Número *" required>
                      </div>
                      <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="inputZip" placeholder="CEP ">
                      </div>

                    </div>

                    <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label text-light" for="gridCheck">
                            Aceito os termos
                          </label>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-braindev">Comprar agora!</button>

                </form>

            </div>

            <div class="checkout braindev-bg-card-dark p-5 container mt-5 ">

                <h3>Planos escolhidos</h3> 

                    <div class="logo-checkout bd-grid-2">
                        <img src="img/step-3.svg" alt="">

                        <div class="text-light">
                            <h3>Plano Pro</h3>
                            <p>Lorem ipsum</p>
                        </div>
                    </div>



            </div>

        </div>
    </main>
@endsection
