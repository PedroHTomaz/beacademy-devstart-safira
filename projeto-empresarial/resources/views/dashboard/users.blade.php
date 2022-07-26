@extends('layouts.template-admin')
@section('title','Painel de Controle')

@section('content')

<main class='container my-5'>

<div class='d-flex justify-content-between'>
    <div>
        <span class='h1 text-primary'>Painel de Controle <i class="fa-solid fa-screwdriver-wrench"></i></span>
    </div>
</div>

<hr class='text-primary'>

<div class='d-flex gap-3 mt-3'>
    <div class='d-flex flex-column w-25 shadow-sm p-3 rounded'>
        <a href="{{ route('admin.dashboard') }}" class='btn btn-outline-primary mb-1'><i class="fa-solid fa-box-open"></i> Produtos</a>
        <a href="{{ route('admin.dashboardUsers') }}" class='btn btn-outline-primary mb-1'><i class="fa-solid fa-user-large"></i> Usuários</a>
        <a href="{{route('admin.dashboardOrders')}}" class='btn btn-outline-primary'><i class="fa-solid fa-basket-shopping"></i> Pedidos</a>
    </div>
    <div class='shadow-sm p-3 rounded w-100'>
        <div>
            <iframe src="/usuarios" class='w-100' height='408px;' frameborder="0"></iframe>
        </div>
    
    </div>
</div>

</main>
@endsection