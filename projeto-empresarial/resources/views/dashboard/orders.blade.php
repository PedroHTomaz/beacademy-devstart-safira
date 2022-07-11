@extends('layouts.template-main')
@section('title','Painel de Controle')

@section('content')
<div class='py-3 shadow-sm'>
<div class='d-flex justify-content-between container'>
    <div>
        <a href="/" class='h5 fw-bold text-decoration-none'><i class="fa-solid fa-diamond"></i> SAFIRA</a>
    </div>
    <div class='d-flex align-items-center gap-3'>
        <img src="https://cdn-icons-png.flaticon.com/512/747/747545.png" style='height:20px;'>
        <!-- <span>Admin</span> -->
        @if(Auth::User())                        
            <span>{{ Auth::User()->name }} - ADMIN</span>
        @endif
    </div>
</div>
</div>
<main class='container my-5'>

<div class='d-flex justify-content-between'>
    <div>
        <span class='h1 text-primary'>Painel de Controle</span>
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
            <iframe src="/orders" class='w-100' height='768px;'frameborder="0"></iframe>
        </div>
    
    </div>
</div>

</main>
@endsection