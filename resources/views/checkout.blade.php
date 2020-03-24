@extends('layouts.master')

@section('content')

    <main class="row">
        <div class="container py-5 text-center w-50">
            <h2 class="h2-white"> Finalize seu <b class="title"> Cadastro</b></h2>

            <div class="checkout braindev-bg-card-dark p-5 container mt-5 ">

                <form class="container formCheckout" action="{{ route('register') }}" method="POST">
                  {{ csrf_field() }}
                  @csrf

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Digite seu Nome *" required>

                          @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                      </div>

                      <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Nome da empresa *" required>
                      </div>
                      <div class="form-group col-md-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Digite seu Email *" required>

                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror

                      </div>
                      <div class="form-group col-md-6">
                        <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf" placeholder="Digite seu CPF *" required>

                          @error('cpf')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror

                      </div>
                      <div class="form-group col-md-6">
                        <input id="cnpj" type="cnpj" class="form-control @error('cnpj') is-invalid @enderror" name="cnpj" value="{{ old('cnpj') }}" required autocomplete="cnpj" placeholder="Digite seu CNPJ *" required>

                          @error('cnpj')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror

                      </div>
                      <div class="form-group col-md-6">
                        <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Digite seu Telefone *" required>

                      </div>
                      <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="endereco" name="endereço" placeholder="Seu endereço *" required>
                      </div>

                      <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
                      </div>

                      <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="numero" name="numero" placeholder="Número *" required>
                      </div>

                      <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP ">
                      </div>

                      <div class="form-group col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Crie uma senha ">

                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror

                      </div>
                      <div class="form-group col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme sua senha ">
                      </div>

                    </div>

                    <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="Check">
                          <label class="form-check-label text-light" for="gridCheck">
                            Aceito os termos
                          </label>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-braindev"> {{ __('Comprar agora!') }} </button>

                </form>

            </div>

            <div class="checkout braindev-bg-card-dark p-5 container mt-5 ">

                <h3>Planos escolhidos</h3> 

                    <div class="logo-checkout bd-grid-2">
                        <img src="img/step-3.svg" alt="">

                        <div class="text-light">
                            <h3>Plano Starter</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est quibusdam exercitationem, odit tenetur, aliquid quam quaerat nam reprehenderit natus labore sapiente, ut necessitatibus repudiandae pariatur minus at eum fugiat suscipit.</p>
                        </div>
                    </div>



            </div>

        </div>
    </main>
    <script src="js/checkout.js"></script>
@endsection
