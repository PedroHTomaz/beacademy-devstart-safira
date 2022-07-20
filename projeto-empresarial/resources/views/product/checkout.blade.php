<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="https://i.imgur.com/0MqV1gr_d.webp?maxwidth=760&fidelity=grand">

    <title>SAFIRA - Checkout</title>

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/form-validation.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  </head>

  <body>
    <div class='py-3 shadow-sm'>
      <div class='d-flex justify-content-between container'>
        <div>
          <a href="/" class='h5 fw-bold text-decoration-none'><i class="fa-solid fa-diamond"></i> SAFIRA</a>
        </div>
      </div>
    </div>

    <h1 class='text-primary text-center h1 pt-5'>Checkout</h1>

    <div class="container py-5">

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Seu carrinho <i class="fa-solid fa-cart-shopping"></i></span>
            <span class="badge badge-warning badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Nome do produto</h6>
              </div>
              <span class="text-muted">$0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Nome do produto 2</h6>
              </div>
              <span class="text-muted">$0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Nome do produto 3</h6>
              </div>
              <span class="text-muted">$0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-info">
              <span>Total</span>
              <strong>$0</strong>
            </li>
          </ul>

        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3 text-primary">Dados básicos</h4>
          <form class="needs-validation" novalidate="">
            <div class="row">
              <div class="col-md-12 mb-3">
                <label for="firstName">Nome completo</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Nome completo válido é requerido.
                </div>
              </div>
             
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Opcional)</span></label>
              <input type="email" class="form-control" id="email">
              <div class="invalid-feedback">
                <!-- nullable -->
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Endereço</label>
              <input type="text" class="form-control" id="address" required="">
              <div class="invalid-feedback">
                Por favor, informe o seu endereço.
              </div>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="state">Estado</label>
                <input type="text" class="form-control" id="state" required="">
                <div class="invalid-feedback">
                  Informe o seu estado.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="city">Cidade</label>
                <input type="text" class="form-control" id="city" required="">
                <div class="invalid-feedback">
                  Informe a sua cidade.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">CEP</label>
                <input type="text" class="form-control" id="zip" placeholder="" required="">
                <div class="invalid-feedback">
                  CEP é requerido.
                </div>
              </div>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3 text-primary">Pagamento</h4>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Nome</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                <small class="text-muted">Nome completo exibido no cartão</small>
                <div class="invalid-feedback">
                  Nome completo é requerido.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Número do cartão de crédito</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                <div class="invalid-feedback">
                  Número do cartão de crédito é requerido.
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Validade</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                <div class="invalid-feedback">
                  Data de validade é requerida.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                <div class="invalid-feedback">
                  Código de segurança é requerido.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block w-100" type="submit">Pague agora</button>
          </form>
        </div>
      </div>

    </div>

    <script src="{{asset('assets/js/checkValidation.js')}}"></script>

</body></html>