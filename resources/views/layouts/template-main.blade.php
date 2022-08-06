<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/safiraDevs.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/ticket.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="https://i.imgur.com/0MqV1gr_d.webp?maxwidth=760&fidelity=grand">
    <title>SAFIRA - @yield('title')</title>
</head>
<body>

    @yield('content')

    <script src="{{asset('assets/js/viaCepApi.js')}}"></script>
    <script src="{{asset('assets/js/cart.js')}}"></script>
    <script src="{{asset('assets/js/confirmDelete.js')}}"></script>
    <script src="{{asset('assets/js/checkSignUpAndCheckout.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl)
            {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
    </script>
    
</body>
</html>