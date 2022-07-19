<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="shortcut icon" href="https://i.imgur.com/0MqV1gr_d.webp?maxwidth=760&fidelity=grand">
    <title>Safira Squad - Projeto Empresarial</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container">
            <div class='d-flex'>
                <a class="navbar-brand text-primary fw-bold" href="#"><i class="fa-solid fa-diamond"></i> SAFIRA</a>
            </div>       
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
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
                           
                            @if(Auth::user()->is_admin == 1)
    
                             <li class='nav-item'>
                                  <a href="{{ route('admin.dashboard')}}" class="nav-link  text-dark">Painel</a>
                            </li>
                            @endif

                                <li class='nav-item'>
                            <form method="POST" action="{{ route('logout') }}">
                                 @csrf
                                <button type="submit" class="btn btn-primary ms-3 mt-1 btn-sm" >Sair</button>                         
                             </form>  
                        </li>
                        @else
                            <li class='nav-item'>
                                 <a href="{{ route('login') }}" class=" btn nav-link px-3">Entrar</a>
                            </li>

                            <li class='nav-item'>
                                   <a href="{{ route('register') }}" class=" btn nav-link px-3 ">Cadastrar</a> 
                            </li>
                        @endif
            </ul>
            </div>
        </div>
    </nav>
    <main class='container d-flex align-items-center my-5 flex-column text-center flex-lg-row text-lg-start' style='height:90vh;'>
        <div>
            <div>
                <h1 class='display-3'>
                    A <span class='text-primary fw-bold'>SAFIRA</span> QUE VOCÊ PROCURA, VOCÊ ENCONTRA AQUI!
                </h1>
            </div>
            <div class='py-3'>
                <p class='lead'>
                    Somos a maior loja do país especializada em safiras.
                    Fique à vontade para se encantar com a beleza das nossas joias.
                </p>
            </div>
            <div>
                <a href="{{route('catalogo.list')}}" class='btn btn-outline-primary me-lg-3'>Veja nosso catálogo</a>
                <a href="" class='btn text-dark'>ou nos dê um oi</a>
            </div>
        </div>
        <div class='col-6'>
            <img class='img-fluid' src="https://media.istockphoto.com/vectors/icon-of-gem-shining-crystal-vector-id1064892912?k=20&m=1064892912&s=612x612&w=0&h=v7NT6mrfgXGu85iiV9oiWS1al6q1TBooxrgLMWN5tIw=">
        </div>
    </main>
</body>
</html>