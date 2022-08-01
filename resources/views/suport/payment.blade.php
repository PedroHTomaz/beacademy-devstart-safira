@if($status == 'paid')

Olá $data['name'] já foi pago!

@endif


@if($status == 'Processing')

Olá $data['name'] está processando!

@endif


@if($status == 'Refused')

Olá $data['name'] foi recusado!

@endif