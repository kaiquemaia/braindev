<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Cadastro</title>
</head>
<body id="body-cadastro">
    <div class="container my-3 px-4" id="div-master-cadastro">
        
        {{-- IMAGEM --}}
        <div class="text-center pt-5" id="div-img">
            <img  class="" src="{{asset('img/1x/icon-4.png')}}" width="150" alt="Logo">
        </div>

        {{-- FORM --}}
        <form name="signup" method="post" action="cadastro_back.php">
            <div class="row mt-5">
              <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12">
              <label for="exampleInputEmail1"></label>
                <input type="text" class="form-control" placeholder="Nome" name="Nome">
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12">
              <label for="exampleInputEmail1"></label>
                <input type="text" class="form-control" placeholder="Sobrenome" name="Sobrenome">
              </div>
            </div>
            <div class="form-group mb-0">
                <label for="exampleInputEmail1"></label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="Email">
            </div>
            <div class="form-group mb-0">
                <label for="exampleInputEmail1"></label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="CPF/CNPJ" name="CPF_CNPJ">
            </div>
            <div class="form-group mb-0">
                <label for="exampleInputPassword1"></label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="Senha">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"></label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirmar senha" name="confirmarsenha">
            </div>
            
            {{-- BTN CADASTRAR --}}
            <input type="submit" class="btn btn-primary btn-md btn-block mt-4" value="Cadastrar">
        </form>
        
        {{-- VOLTAR AO MENU --}}
        <a href="http://localhost/BeyMind/index.php" class="btn btn-primary btn-md btn-block mt-3 mb-3" role="button" aria-disabled="true">Voltar ao Menu</a>
        
        {{-- LINKS --}}
        <div class="text-center my-3" id="div-span">
            <span>Ao clicar em "Cadastrar" você estará aceitando os <a href="" data-toggle="modal" data-target="#exampleModal" id="div-span">Termos de serviço</a></span><br>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="text-left modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Termos de serviço</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
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
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <span class="text-center">Já tem uma conta? <a href="http://localhost/BeyMind/login.php" id="div-span">Login</a></span>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>