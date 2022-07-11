<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="https://i.imgur.com/0MqV1gr_d.webp?maxwidth=760&fidelity=grand">    <title>SAFIRA - @yield('title')</title>
</head>
<body>
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
                   
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary  btn-sm" >Sair</button>                         
                        </form>
                @endif
            </div>
        </div>
        </div>
    @yield('content')
    <script src="{{asset('assets/js/viaCepApi.js')}}"></script>
</body>
</html>