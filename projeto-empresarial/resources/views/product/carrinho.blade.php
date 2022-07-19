@extends('layouts.template-main')
@section('title', 'Carrinho')
@section('content')

    <div class='py-3 shadow-sm'>
		<div class='d-flex justify-content-between container'>
			<div>
				<a href="/" class='h5 fw-bold text-decoration-none'><i class="fa-solid fa-diamond"></i> SAFIRA</a>
			</div>
		</div>
	</div>

<section class="h-100 gradient-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Carrinho - Itens</h5>
          </div>
          @forelse($orders as $order)
          <div class="card-body">
            <!-- item -->
            @php
              $total_order = 0;
            @endphp
            @foreach($order->order_products as $order_product)
            <div class="row"> 
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Imagem -->
                
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src={{'storage/'. $order_product->product->photo}}
                    class="w-100"/>
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Imagem -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Dados -->
                <p><strong>{{$order_product->product->name}}</strong></p>
                <button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                  title="Remove item">
                  <i class="fas fa-trash"></i>
                </button>
              
                <!-- Dados -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantidade -->
                <div class="d-flex mb-4" style="max-width: 300px">
                  <button class="btn btn-primary px-3 me-2 h-50"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                    <i class="fas fa-minus"></i>
                  </button>

                  <div class="form-outline">
                    <input id="form1" min="0" name="quantity" value="{{$order_product->qtd}}" type="number" class="form-control" />
                    <label class="form-label" for="form1">Quantidade</label>
                  </div>

                  <button class="btn btn-primary px-3 ms-2 h-50"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- Quantidade -->

                <!-- Preço -->
                <p class="text-start text-md-center">
                  <strong>R$ {{number_format($order_product->valores, 2, ',', '.')}}</strong>
                </p>

               
                <!-- Preço -->
              </div>
            </div>
            @php
              $total_products = $order_product->valores;
              $total_order +=  $total_products;
            @endphp
            
            @endforeach
            <!-- Resumo pra ir pro checkout -->
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Resumo</h5>
          </div>

          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Produtos
                <span></span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total</strong>
                </div>
                <span><strong>R$ {{number_format($total_order, 2, ',', '.')}}</strong></span>
              </li>
            </ul>

            <button type="button" class="btn btn-primary d-block w-100">
              Checkout
            </button>
           

            @empty
              <h6 class="mt-3 text-center" >NÃO HÁ NENHUM PEDIDO NO CARRINHO  :}</h6>
            @endforelse
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection