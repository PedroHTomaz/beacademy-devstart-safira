    @if($data[1] == 'paid')

        <h1 style="color:#0d6efd;">Equipe Safira!</h1>
        <hr>
        <h2>Olá {{ $data[0]["customer_name"] }}, sua compra foi realizada com sucesso!</h2>
        @if($data[0]["transaction_type"] == 'ticket')
            <br>
            <span><b>Meio de pagamento:</b> Boleto <br>
            <span><b>Valor total:</b> {{ $data[0]["transaction_amount"] }}<br>
            <span><b>Data do pagamento:</b>{{date('d/m/Y')}}</span><br>  
        @elseif($data[0]["transaction_type"] == 'card')
            <br>
            <span><b>Meio de pagamento:</b> Cartão de Crédito <br>
            <span><b>Quantidade de Parcelas:</b> {{ $data[2]["installments"] }}<br> 
            <span><b>Valor das parcelas:</b> {{ $data[2]["amount_installment"] }}<br> 
            <span><b>Valor total:</b> {{ $data[2]["amount"] }}<br>    
            <span><b>Data do pagamento:</b>{{date('d/m/Y')}}</span><br>           
        @endif
        </span>
        <br>
        <span></span>
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
