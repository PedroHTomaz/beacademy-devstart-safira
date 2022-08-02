@if($data[1] == 'paid')

<h1>Equipe Safira!</h1>

<hr>

<h2>Olá {{ $data[0]["customer_name"] }} já foi realizado com sucesso a sua compra por meio do: {{$data[0]["transaction_type"]}}!</h2>

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