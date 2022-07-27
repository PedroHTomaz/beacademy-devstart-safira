<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="https://i.imgur.com/0MqV1gr_d.webp?maxwidth=760&fidelity=grand">

    <title>SAFIRA - Checkout</title>

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/scrollbar.css')}}">
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

    <div class='container'>
      <h1 class='text-primary h1 pt-5'>Checkout <i class="fa-solid fa-list-ul"></i></h1>
      <hr>
    </div>

    <div class="container py-5">

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Seu carrinho <i class="fa-solid fa-cart-shopping"></i></span>
            <span class="badge badge-warning badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item justify-content-between lh-condensed">
                <strong> <span> Produtos: {{$qtdProduct}} </span></strong> 
                <ul class="list-group list-group-flush">
                  @forelse( $orders as $order)
                    @foreach($order->order_products as $order_products)
                      <li class="list-group-item d-flex justify-content-end align-items-center border-0 px-0 pb-0">
                        <h6 class='mt-3'>{{$order_products->qtd}} x {{ $order_products->product->name }}</h6>
                      </li>
                    @endforeach
                    @empty 
                  @endforelse
                </ul>
            </li>   
            <li class="list-group-item d-flex justify-content-between bg-info">
              @foreach( $orders as $order)   
                <span>Total</span>
                <strong>R$ {{number_format($order->value, 2, ',', '.')}}</strong>
              @endforeach
            </li>
          </ul>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3 text-primary">Confirme seus dados <i class="fa-solid fa-check"></i></h4>
          <form class="needs-validation" novalidate="">
            <div class="row">
              <div class="col-md-12 mb-3">
                @foreach($orders as $order)
                <label for="firstName">Nome completo</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="{{ $order->user->name }}" required="">
                <div class="invalid-feedback">
                  Nome completo válido é requerido.
                </div>
              </div>
             
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Opcional)</span></label>
              <input type="email" class="form-control" placeholder="exemplo@email.com" id="email">
              <div class="invalid-feedback">
                <!-- nullable -->
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Endereço</label>
              <input type="text" class="form-control" value="{{ $order->user->street }}" id="address" required="">
              <div class="invalid-feedback">
                Por favor, informe o seu endereço.
              </div>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="state">Estado</label>
                <input type="text" class="form-control" value="{{ $order->user->state }}" id="state" required="">
                <div class="invalid-feedback">
                  Informe o seu estado.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="city">Cidade</label>
                <input type="text" class="form-control" value="{{ $order->user->city }}" id="city" required="">
                <div class="invalid-feedback">
                  Informe a sua cidade.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">CEP</label>
                <input type="text" class="form-control" id="zip" value="{{ $order->user->cep }}" placeholder="" required="">
                <div class="invalid-feedback">
                  CEP é requerido.
                </div>
              </div>
            </div>
            @endforeach
            <hr class="mb-4">

            <h4 class="mb-3 text-primary">Pagamento <i class="fa-solid fa-credit-card"></i></h4>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Nome</label>
                <input type="text" class="form-control" id="cc-name" maxlength='36' placeholder="" required="">
                <small class="text-muted">Nome completo exibido no cartão</small>
                <div class="invalid-feedback">
                  Nome completo é requerido.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Número do cartão de crédito</label>
                <input type="text" maxlength='19' class="form-control" id="cc-number" placeholder="xxxx-xxxx-xxxx-xxxx" required="">
                <div class="invalid-feedback">
                  Número do cartão de crédito é requerido.
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Validade</label>
                <input type="text" maxlength='5' class="form-control" id="cc-expiration" placeholder="00/00" required="">
                <div class="invalid-feedback">
                  Data de validade é requerida.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" maxlength='3' class="form-control" id="cc-cvv" placeholder="xxx" required="">
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