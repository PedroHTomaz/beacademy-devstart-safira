@extends('layouts.template-main')
@section('title','Meus Pedidos')

@section('content')

<div class='py-3 shadow-sm'>
    <div class='d-flex justify-content-between container'>
        <div>
            <a href="/" class='h5 fw-bold text-decoration-none'><i class="fa-solid fa-diamond"></i> SAFIRA</a>
        </div>
    </div>
</div>

<div class='container py-5'>

        <div class='mb-4'>
            <h1 class='h1 text-primary'>Meus Pedidos <i class="fa-solid fa-clipboard-check"></i></h1>
        </div>

        <ul class='shadow rounded p-3 mb-5'>
            <div class='d-flex justify-content-between'>
                <div>
                    <span class='fw-bold'>Pedido realizado:</span>
                    <br>
                    <span>00/00/2022</span>
                </div>
                <div>
                    <span>Pedido n.º : 000</span>
                    <br>
                    <span class='fw-bold'>Status: Em processamento...</span>
                </div>
            </div>
            <hr>
            <li class='d-flex py-3 align-items-center'>
                <img style='max-height:150px;' src="https://thumbs.dreamstime.com/b/diamond-illustration-flat-style-faceted-gem-sapphire-symbol-85365698.jpg">
                <div class='d-flex w-100'>
                    <div>
                        <h5 class='h5 text-primary fw-bold'>
                            Produto 1
                        </h5>
                        <br>
                        <i class="fa-solid fa-heart text-primary h5"></i>
                    </div>
                    <div class='ms-auto'>
                        <span>Quantidade: x3</span>
                        <br>
                        <span  class='fw-bold d-block mt-3'>Valor Total: R$ 00,00</span>
                        <br>
                        <a href="{{ route('catalogo.list') }}" class='btn btn-primary'>Comprar novamente</a>
                    </div>
                </div>
            </li>

            <li class='d-flex py-3 align-items-center'>
                <img style='max-height:150px;' src="https://thumbs.dreamstime.com/b/diamond-illustration-flat-style-faceted-gem-sapphire-symbol-85365698.jpg">
                <div class='d-flex w-100'>
                    <div>
                        <h5 class='h5 text-primary fw-bold'>
                            Produto 1
                        </h5>
                        <br>
                        <i class="fa-solid fa-heart text-primary h5"></i>
                    </div>
                    <div class='ms-auto'>
                        <span>Quantidade: x3</span>
                        <br>
                        <span  class='fw-bold d-block mt-3'>Valor Total: R$ 00,00</span>
                        <br>
                        <a href="{{ route('catalogo.list') }}" class='btn btn-primary'>Comprar novamente</a>
                    </div>
                </div>
            </li>

            <li class='d-flex py-3 align-items-center'>
                <img style='max-height:150px;' src="https://thumbs.dreamstime.com/b/diamond-illustration-flat-style-faceted-gem-sapphire-symbol-85365698.jpg">
                <div class='d-flex w-100'>
                    <div>
                        <h5 class='h5 text-primary fw-bold'>
                            Produto 1
                        </h5>
                        <br>
                        <i class="fa-solid fa-heart text-primary h5"></i>
                    </div>
                    <div class='ms-auto'>
                        <span>Quantidade: x3</span>
                        <br>
                        <span  class='fw-bold d-block mt-3'>Valor Total: R$ 00,00</span>
                        <br>
                        <a href="{{ route('catalogo.list') }}" class='btn btn-primary'>Comprar novamente</a>
                    </div>
                </div>
            </li>
            
        </ul>

        <ul class='shadow rounded p-3 mb-5'>
            <div class='d-flex justify-content-between'>
                <div>
                    <span class='fw-bold'>Pedido realizado:</span>
                    <br>
                    <span>00/00/2022</span>
                </div>
                <div>
                    <span>Pedido n.º : 000</span>
                    <br>
                    <span class='fw-bold'>Status: Em processamento...</span>
                </div>
            </div>
            <hr>
            <li class='d-flex py-3 align-items-center'>
                <img style='max-height:150px;' src="https://thumbs.dreamstime.com/b/diamond-illustration-flat-style-faceted-gem-sapphire-symbol-85365698.jpg">
                <div class='d-flex w-100'>
                    <div>
                        <h5 class='h5 text-primary fw-bold'>
                            Produto 1
                        </h5>
                        <br>
                        <i class="fa-solid fa-heart text-primary h5"></i>
                    </div>
                    <div class='ms-auto'>
                        <span>Quantidade: x3</span>
                        <br>
                        <span  class='fw-bold d-block mt-3'>Valor Total: R$ 00,00</span>
                        <br>
                        <a href="{{ route('catalogo.list') }}" class='btn btn-primary'>Comprar novamente</a>
                    </div>
                </div>
            </li>
        </ul>

        <ul class='shadow rounded p-3 mb-5'>
            <div class='d-flex justify-content-between'>
                <div>
                    <span class='fw-bold'>Pedido realizado:</span>
                    <br>
                    <span>00/00/2022</span>
                </div>
                <div>
                    <span>Pedido n.º : 000</span>
                    <br>
                    <span class='fw-bold'>Status: Em processamento...</span>
                </div>
            </div>
            <hr>
            <li class='d-flex py-3 align-items-center'>
                <img style='max-height:150px;' src="https://thumbs.dreamstime.com/b/diamond-illustration-flat-style-faceted-gem-sapphire-symbol-85365698.jpg">
                <div class='d-flex w-100'>
                    <div>
                        <h5 class='h5 text-primary fw-bold'>
                            Produto 1
                        </h5>
                        <br>
                        <i class="fa-solid fa-heart text-primary h5"></i>
                    </div>
                    <div class='ms-auto'>
                        <span>Quantidade: x3</span>
                        <br>
                        <span  class='fw-bold d-block mt-3'>Valor Total: R$ 00,00</span>
                        <br>
                        <a href="{{ route('catalogo.list') }}" class='btn btn-primary'>Comprar novamente</a>
                    </div>
                </div>
            </li>
        </ul>

    </div>
@endsection