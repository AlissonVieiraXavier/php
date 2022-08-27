<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vizualizar Produtos</title>
</head>
<body>
    <div class="camporesultado">
        <div class="camporesultado_divs">
            <h3>Nome:</h3><p>{{ $produto->nome }}</p>
        </div>
        <div class="camporesultado_divs">
            <h3>Custo:</h3><p>{{ $produto->custo }}</p>
        </div>
        <div class="camporesultado_divs">
            <h3>Preço:</h3><p>{{ $produto->preco }}</p>
        </div>
        <div class="camporesultado_divs">
            <h3>quantidade:</h3><p>{{ $produto->quantidade }}</p>
        </div>
    </div>
</body>
</html>