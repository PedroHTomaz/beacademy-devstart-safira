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
    <div>
      <h1 class='text-primary h1'>Meu carrinho <i class="fa-solid fa-cart-shopping"></i></h1>
      <hr>
    </div>
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">{{$qtdProduct}} Itens</h5>
          </div>
          @forelse($orders as $order)
          <div class="card-body">
            <!-- item -->
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
                <form action="{{route('cart.destroy')}}" method="POST">
                    @method('delete')
                    @csrf
                    <input type="hidden" name="order_id" value="{{$order->id}}">
                    <input type="hidden" name="product_id" value="{{$order_product->product_id}}">
                    <input type="hidden" name="items" value={{0}}>
                    <input type="hidden" name="order_product_value" value={{$order_product->valores}}>
                    <button type="submit" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                      title="Remover produto">
                      <i class="fas fa-trash"></i>
                    </button>
                </form>
                <!-- Dados -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantidade -->
                <div class="d-flex mb-4" style="max-width: 300px">

                  <form action="{{route('cart.destroy')}}" method="POST">
                    @method('delete')
                    @csrf
                    <input type="hidden" name="order_id" value="{{$order->id}}">
                    <input type="hidden" name="product_id" value="{{$order_product->product_id}}">
                    <input type="hidden" name="items" value={{1}}>
                    <input type="hidden" name="product_value" value={{$order_product->product->sale_price}}>
                    <button type="submit" class="btn btn-primary px-3 me-2 h-50">
                      <i class="fas fa-minus"></i>
                    </button>
                  </form>

                  <div class="form-outline">
                    <input id="form1" min="0" name="quantity" value="{{$order_product->qtd}}" type="number" class="form-control" />
                    <label class="form-label" for="form1">Quantidade</label>
                  </div>

                  <form action="{{route('cart.add')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$order_product->product->id}}">
                    <button type="submit" class="btn btn-primary px-3 ms-2 h-50">
                      <i class="fas fa-plus"></i>
                    </button>
                  </form>

                </div>
                <!-- Quantidade -->

                <!-- Preço -->
                <p class="text-start text-md-center">
                  <strong>Unidade - R$ {{number_format($order_product->product->sale_price, 2, ',', '.')}}  </strong>
                </p>
                <p class="text-start text-md-center">
                  <strong>Total - R$ {{number_format($order_product->valores, 2, ',', '.')}}</strong>
                </p>
               

               
                <!-- Preço -->
              </div>
            </div>
            
            @endforeach
            <!-- Resumo pra ir pro checkout -->
          </div>
        </div>
        <span class='d-block mb-4'>Pedido n.º : {{$order->id}}</span>

      </div>

      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Resumo</h5>
          </div>

          <div class="card-body">
            <div class="d-flex justify-content-between">
              <strong> Produtos </strong> 
              <ul class="list-group list-group-flush">
                @foreach( $order->order_products as $order_product)
                <li
                  class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                  <span>{{$order_product->qtd}} x {{$order_product->product->name}}</span>
                </li>
                @endforeach
              </ul>
            </div>
            
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total</strong>
                </div>
                <span><strong>R$ {{number_format($order->value, 2, ',', '.')}}</strong></span>
              </li>
            </ul>
            <a href="{{route('catalogo.list')}}" type="button" class="btn btn-outline-primary mb-3 d-block w-100 ">
              Continuar comprando
            </a>
            <a href="{{route('cart.checkout')}}" type="button" class="btn btn-primary d-block w-100 ">
              Checkout
            </a>
           
            @empty
            <h5 class='text-center p-3'>Poxa! Seu carrinho está vazio! <i class="fa-solid fa-heart-crack"></i></h5>
            <a href="{{ route('catalogo.list') }}" class='btn btn-primary mx-auto mb-3'>Catálogo</a>
            @endforelse
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection
          
             
                
             
              
