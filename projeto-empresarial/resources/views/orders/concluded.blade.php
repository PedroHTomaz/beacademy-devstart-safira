@extends('layouts.template-main')
@section('title',' Pedido Concluído')
<nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container">
        <div class='d-flex'>
            <a class="navbar-brand text-primary fw-bold" href="#"><i class="fa-solid fa-diamond"></i> SAFIRA</a>
        </div>       
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                @if(Auth::user()) 
                    @if(Auth::user()->photo)
                        <li class='nav-item'>
                            <img class='rounded-circle mt-1 border border-primary border-2' height='35px'src="{{ asset('storage/'.Auth::User()->photo) }}">
                        </li>
                    @else
                        <li class='nav-item'>
                            <img class='rounded-circle mt-1 border border-primary border-2' height='35px'src="{{ asset('storage/profile/avatar.jpg') }}">
                        </li>
                    @endif
                    <li class='nav-item'>
                        <a href="#" class="nav-link ms-1 text-dark">{{ Auth::User()->name }}</a>
                    </li>
                    <li>
                        <a href="{{ route('orders.myOrders') }}" class="nav-link text-dark me-1">Meus pedidos</a>
                    </li>        
                    @if(Auth::user()->is_admin == 1)
                        <li class='nav-item'>
                            <a href="{{ route('admin.dashboard')}}" class="nav-link  text-dark">Painel</a>
                        </li>
                    @endif
                    <li class='nav-item'>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary ms-2 mt-1" ><i class="fa-solid fa-right-from-bracket"></i> Sair</button>                         
                        </form>
                    </li>
                    @else
                        <li class='nav-item'>

                            <a href="{{ route('login') }}" class=" btn text-primary mx-1 ">Entrar</a>
                        </li>

                        <li class='nav-item'>
                            <a href="{{ route('register') }}" class=" btn btn-primary mx-1 ">Cadastrar</a> 
                        </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<main class="container mt-5">
    <div class="card text-center fs-3" style="max-height:250px;">
        <div class="card-header">
          Perfeito!
        </div>
        <div class="card-body">
          <h2 class="card-title">Pedido feito, obrigado!</h2>
          <p class="card-text">A confirmação será enviada para o seu e-mail.</p>
          <a href="{{route('catalogo.list')}}" type="button" class="btn btn-primary">
            Continuar comprando
          </a>
        </div>
    </div>
</main>
@section('content')