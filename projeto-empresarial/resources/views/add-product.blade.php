<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Produto</title>
</head>
<body>
    <h1>Cadastrar Produto</h1>
    <form method="POST">
        <label for="name">Nome</label>
        <input id="name" name="name" type="text">

        <label for="description">Descrição</label>
        <textarea name="description" id="description"></textarea>
        
        <label for="quantity">Quantidade</label>
        <input id="quantity" name="quantity" type="text">

        <label for="cost-price">Preço de custo</label>
        <input id="cost-price" name="cost-price" type="text">

        <label for="sale-price">Preço de venda</label>
        <input id="sale-price" name="sale-price" type="text">

        <label for="photo">Foto</label>
        <input id="photo" name="photo" type="text">

        <button>Cadastrar</button>
    </form>
</body>
</html>