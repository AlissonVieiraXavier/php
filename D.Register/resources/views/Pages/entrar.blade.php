<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/entrar.css') }}">
    <title>
    </title>
</head>
<body class="body">
    <header class="header-main">
        <h1> Seja bem vindo ao Document Register </h1>
        <div class="about">
        <p> O Melhor software de controle de notas fiscais e outros documentos.</p>
        <img href="{{asset('img/img1.png')}}"></img>
        </div>
        
    </header>
    <main class="main">
    <div><h3>Como você vai entrar?</h3></div>
    <div class="content-lis">
    <a href="/login"> -> Já possuo conta,Vou entrar com login</a><br>
    <a href="/register"> -> Ainda não tenho conta... Vou criar uma nova.</a>
    </div>
    </main>
</body>
</html>