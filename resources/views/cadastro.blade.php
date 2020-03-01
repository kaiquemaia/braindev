<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>BeyMind | Cadastro</title>
</head>
<body id="body-cadastro">
    <div class="container parent mt-5" id="div-master-cadastro">
        <div class="row">
            
            <!-- ----------- LOGO -->
            <div class="col-12 pt-3" id="grid-logo">
                <img  class="rounded mx-auto d-block" width="230" src="{{asset('img/1x/icon-4.png') }}" alt="Logo">
            </div>

            <!-- ----------- FORM -->
            <div class="col-12 pb-1 px-0" id="grid-form">
                <form class="container">
                    <div class="row form-group mb-0 ">
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12">
                            <label for="exampleInputEmail1"></label>
                            <input type="text" class="form-control form-control-lg" placeholder="Nome" name="Nome">
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12">
                            <label for="exampleInputEmail1"></label>
                            <input type="text" class="form-control form-control-lg" placeholder="Sobrenome" name="Sobrenome">
                        </div>
                      </div>
                      <div class="form-group mb-0">
                          <label for="exampleInputEmail1"></label>
                          <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="Email">
                      </div>
                      <div class="form-group mb-0">
                          <label for="exampleInputEmail1"></label>
                          <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="CPF/CNPJ" name="CPF_CNPJ">
                      </div>
                      <div class="form-group mb-0">
                          <label for="exampleInputPassword1"></label>
                          <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Senha" name="Senha">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1"></label>
                          <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Confirmar senha" name="confirmarsenha">
                      </div>
                      
                      {{-- BTN CADASTRAR --}}
                          <input type="submit" class="btn-block mt-4 btn-braindev" value="Cadastrar">
                
                      {{-- VOLTAR AO MENU --}}
                      <a href="http://localhost:8000/" class="btn-block mt-2 btn-braindev text-center">Voltar ao Menu</a>
                      
                      {{-- LINKS --}}
                      <div class="text-center my-3" id="div-span">
                          <span>Ao clicar em "Cadastrar" você aceita os <a href="" data-toggle="modal" data-target="#exampleModal" id="div-span">Termos de serviço</a></span><br>
                          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="text-left modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Termos de serviço</h5>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque ratione quasi fugit repellendus. Deleniti corporis, recusandae deserunt minima aliquam delectus quis ipsum inventore voluptatum suscipit ipsam fuga quaerat non!
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn-braindev" data-dismiss="modal">Close</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <span class="text-center">Já tem uma conta? <a href="http://localhost/BeyMind/login.php" id="div-span">Login</a></span>
                      </div>
                </form>
            </div>
        </div>
    </div>

    {{-- LINKS --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>