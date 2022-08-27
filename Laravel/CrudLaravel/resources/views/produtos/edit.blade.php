<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar produto</title>
</head>
<body>
    <form action="{{ route('alteraProduto', [ 'id' => $produto->id ]) }}" method="post">
    @csrf
     <label for="nome">Nome:</label>
     <input type="text" name="" id="" value="{{$produto->nome}}">
     <label for="nome">Custo:</label>
     <input type="text" name="" id="" value="{{$produto->custo}}">
     <label for="nome">Preço:</label>
     <input type="text" name="" id="" value="{{$produto->preco}}">
     <label for="nome">Quantidade:</label>
     <input type="text" name="" id="" value="{{$produto->quantidade}}">
     <button>Salvar</button>
    </form>
</body>
</html>