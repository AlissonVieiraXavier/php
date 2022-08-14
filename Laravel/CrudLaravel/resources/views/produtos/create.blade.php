<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar um novo Produto</title>
</head>
<body>
   <form action="{{route('registrarProduto')}}" method="POST">
   @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome">
        <label for="custo">Custo</label>
        <input type="text" name="custo">
        <label for="preco">Preço</label>
        <input type="text" name="preco">
        <label for="quntidade">Quantidade</label>
        <input type="text" name="quantidade">
        <button>Registrar</button>
   </form>   

</body>
</html>