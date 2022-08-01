@if($data == 'paid')

Olá $data['customer_name'] já foi pago por meio de: $data['transaction_type']!

@endif


@if($data == 'reserved')

Olá $data['customer_name'], o produto está processando!

@endif


@if($data == 'canceled')

Olá $data['customer_name'], o produto foi recusado!

@endif