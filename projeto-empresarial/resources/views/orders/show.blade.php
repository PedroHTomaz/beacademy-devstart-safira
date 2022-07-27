@extends('layouts.template')
@section('title','Usuário ' . $order->user->name)

@section('content')
    <a href="{{route('orders.index')}}" class="btn btn-primary text-white">
        Voltar 
    </a>
    <div class="d-flex justify-content-between mt-4">
        <h2 class="text-primary" id="identifier">Pedido nº : <spam class="text-dark">{{ $order->id }}</spam></h2>
        <p><b>Emitido em:</b> {{ date('d/m/Y', strtotime($order->created_at)) }}</p>
    </div>

    <hr>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen p-3 modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Produtos disponíveis</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>            
                                <th scope="col">Valor</th>
                                <th scope="col">Foto</th>
                                <th scope="col">descrição</th>
                                <th  scope="col" colspan="2">Adicionar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <th scope="row">{{$product->id}}</th>
                                    <td id="identifier">{{$product->name}}</td>
                                    <td>{{$product->sale_price}}</td>
                                    <td><img src="{{asset('storage/'.$product->photo)}}" width="50" height="50" class="border border-primary border-3 rounded-circle"></td>
                                    <td>{{$product->description}}</td>
                                    <td> 
                                        <form action="{{route('orders.add')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id_product" value="{{$product->id}}">
                                            <input type="hidden" name="id_order" value="{{$order->id}}">
                                            <button type="submit" class="btn btn-primary ms-2">
                                            <i class="fas fa-plus"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="invoice">
                <div class="row invoice-info">
                    <p class="lead">Cliente</p>
                    <div class="col-sm-4 invoice-col">
                    <address>
                        <b>Nome: </b>{{$order->user->name}}<br>
                        <b>Rua: </b>{{$order->user->street}}<br>
                        <b>Cidade: </b>{{$order->user->city}} - {{$order->user->state}}<br>
                        <b>Telefone: </b>  {{$order->user->tel}}<br>
                        <b>E-mail: </b>  {{$order->user->email}}
                    </address>
                    </div>
                    <div class="col-sm-4 invoice-col">
                        <b>CEP: </b>{{$order->user->cep}}<br>
                        <b>CPF: </b>{{$order->user->cpf}}<br>
                        <br>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="d-flex justify-content-between">
                        <p class="lead">Produtos</p>
                        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            + Adicionar Produto
                        </button>
                    </div>

                    <div class="col-xs-12 table-responsive">
                        <table class="table table-borderless mt-1">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">ID</th> 
                                    <th scope="col">Produto</th> 
                                    <th scope="col">Valor Unitário</th>
                                    <th scope="col">Quantidade</th>
                                    <th scope="col">Valor Total</th>
                                    <th scope="col">Remover produto</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach($order->order_products as $order_product)
                                <tr>
                                    <th scope="row">{{$order_product->product->id }}</th>
                                    <td>{{ $order_product->product->name}}</td>
                                    <td>{{ $order_product->product->sale_price}}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <form action="{{route('orders.product.destroy')}}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <input type="hidden" name="order_id" value="{{$order->id}}">
                                                <input type="hidden" name="product_id" value="{{$order_product->product_id}}">
                                                <input type="hidden" name="items" value={{1}}>
                                                <input type="hidden" name="product_value" value={{$order_product->product->sale_price}}>
                                                <button type="submit" class="btn btn-primary me-2">
                                                <i class="fas fa-minus"></i>
                                                </button>
                                            </form>
                            
                                            <div class="form-outline">
                                                <input id="form1" name="quantity" value="{{$order_product->qtd}}" style="text-align: center" type="text" size="1px" class="form-control" readonly/>
                                            </div>
                            
                                            <form action="{{route('orders.add')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id_product" value="{{$order_product->product->id}}">
                                                <input type="hidden" name="id_order" value="{{$order->id}}">
                                                <button type="submit" class="btn btn-primary ms-2">
                                                <i class="fas fa-plus"></i>
                                                </button>
                                            </form>
                            
                                        </div>
                                    </td>
                                    <td>{{$order_product->valores}}</td>
                                    <td>
                                        <form action="{{route('orders.product.destroy')}}" method="POST">
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
                                    </td>    
                                </tr>    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="row invoice-info">
                        <p class="lead">Resumo do pedido</p>
                        <div class="col-sm-4 invoice-col">
                            <b>Status: </b><br>
                            <b>Valor Total: </b><br>
                        </div>
                        <div class="col-sm-4 invoice-col">
                        {{$order->status}}<br>
                            R$ {{number_format($order->value, 2, ',', '.')}}
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning me-2">Editar Status</a>
                    <form action="{{route('orders.destroy', $order->id)}}" method="POST" id="form">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection