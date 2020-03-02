@extends('layouts.header');

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body class="bg-lightgit">
    <div class="banner">
            <center>
            <h1 class="py-4">Finalize o pagamento</h1>
            </center>
    </div>
    <main class="container py-5">
        
        <div class = "row"  >
            <!-- desc dos produtos  -->
            <div class="col-md-4 order-md-2 mb-4 promo-code">
                <h4 class="d-flex bd-highligh mb-3">
                    <span class="text-muted p-2 bd-highlight">Carrinho</span>
                    <i class="fa fa-shopping-cart p-2 bd-highlight" aria-hidden="true"></i>
                    <span class="badge-baseline badge-secondary badge-pill ml-auto p-2 bd-highlight">3</span>
                </h4>
                <!-- fazer um foreach p completar automático produtos  -->
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Product name</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$12</span>
                    </li>
                </ul>
                <!-- verificar codigo promocional -->
                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cod promocional">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">Aplicar</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- dados cadastrais -->
            <div class="col-md-7 order-md-1 info-checkout">
                <h4 class="mb-3">Endereço de Cobrança</h4>
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Nome</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                            Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Sobrenome</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                            Valid last name is required.
                            </div>
                            </div>
                    </div>

                    <div class="mb-3">
                        <label for="username">Usuario</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" id="username" placeholder="Usuario" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                Your username is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email <span class="text-muted">(Opcional)</span></label>
                        <input type="email" class="form-control" id="email" placeholder="voce@exemplo.com">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Endereço</label>
                        <input type="text" class="form-control" id="address" placeholder="Rua Sol, 123" required>
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address2">Complemento<span class="text-muted">(Opcional)</span></label>
                        <input type="text" class="form-control" id="address2" placeholder="Apto 03">
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">País</label>
                            <select class="custom-select d-block w-100" id="country" required>
                            <option value="">Escolha...</option>
                            <option>Brasil</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">Estado</label>
                            <select class="custom-select d-block w-100" id="state" required>
                            <option value="">Escolha...</option>
                            <option>São Paulo</option>
                            <option>Rio de Janeiro</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                            </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">CEP</label>
                            <input type="text" class="form-control" id="zip" placeholder="" required>
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
                        </div>
                    </div>
                    <!-- check box  -->
                    <hr class="mb-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="same-address">
                            <label class="custom-control-label" for="same-address">Endereço de entrega o mesmo do endereço de cobrança</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="save-info">
                            <label class="custom-control-label" for="save-info">Salve as informações para a próxima compra</label>
                        </div>
                    <hr class="mb-4">

                    <!-- dados pagamento  -->

                        <h4 class="mb-3">
                            Pagamento
                        </h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                            <label class="custom-control-label" for="credit">Cartão de Credit</label>
                            <i class="fa fa-cc-amex" aria-hidden="true"></i>
                            <i class="fa fa-cc-visa" aria-hidden="true"></i>
                            <i class="fa fa-cc-mastercard" aria-hidden="true"></i>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="debit">Cartão de Debit</label>
                            <i class="fa fa-cc-visa" aria-hidden="true"></i>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="paypal">PayPal</label>
                            <i class="fa fa-cc-paypal" aria-hidden="true"></i>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Nome no cartão</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="" required>
                            <small class="text-muted">Nome igual do cartão </small>
                            <div class="invalid-feedback">
                                Name on card is required
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Número do cartão </label>
                            <input type="text" class="form-control" id="cc-number" placeholder="" required>
                            <div class="invalid-feedback">
                                Credit card number is required
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Data de Validade</label>
                            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                            <div class="invalid-feedback">
                                Expiration date required
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-cvv">CVV</label>
                            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                            <small class="text-muted">Cod de trás do cartão </small>
                            <div class="invalid-feedback">
                                Security code required
                            </div>
                        </div>
                    </div>
                            <hr class="mb-4">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Contratar</button>
                </form>
                <!-- </div>
                </div> VERIFICAR SE HÁ NECESSIDADE DESSES 2 FECHAMENTOS DE DIV-->
            </div>
        </div>
    </main>
    <!-- footer -->
    <!-- footer -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>