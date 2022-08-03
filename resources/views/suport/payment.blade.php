@if($data[1] == 'paid')

<h1 style="color:#0d6efd;">Equipe Safira!</h1>

<hr>

<h2>Olá {{ $data[0]["customer_name"] }}, sua compra foi realizada com sucesso!</h2>
<br>
<span>Meio de pagamento: {{$data[0]["transaction_type"]}}</span>
<br>
<span style="color:red;">Se você não fez essa compra, <a href="http://devstart-safira.herokuapp.com/contato">entre em contato conosco</a> , por favor!</span>

@endif

@if($data[1] == 'reserved')

<h1>Equipe Safira!</h1>

<hr>

<h2> Olá {{ $data[0]["customer_name"] }}, o produto está processando!</h2>

@endif


@if($data[1] == 'canceled')

<h1>Equipe Safira!</h1>

<hr>

<h2> Olá {{ $data[0]["customer_name"] }}, o produto foi recusado!</h2>

@endif
