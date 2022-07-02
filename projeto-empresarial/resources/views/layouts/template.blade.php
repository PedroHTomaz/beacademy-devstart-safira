<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark" style="background-color:#3E065F">
            <div class="container">
                <a class="navbar-brand" href="#">LOJA SAFIRA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <nav class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">INÍCIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('produtos.index')}}">PRODUTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('produtos.add')}}">NOVO PRODUTO</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </header>

    <article class="container">
        @yield('content')
    </article>

    <footer>

    </footer>

    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/scriptFormatCoin.js')}}"></script>
</body>
</html>