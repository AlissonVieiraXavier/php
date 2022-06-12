<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Register - {{$title}} </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="nav">
            <input type="checkbox" id="nav-check">
        <div class="nav-header">
            <div class="nav-title">
            Document Register
            </div>
            </div>
            <div class="nav-btn">
                <label for="nav-check">
                <span></span>
                <span></span>
                <span></span>
                </label>
            </div>
            
            <div class="nav-links">
                <a href="/painel" target="_blank">Painel</a>
                <a href="/novo" target="_blank">Registrar novo</a>
                <a href="/documentos" target="_blank">Documentos armazenados</a>
                <a href="/duvidas" target="_blank">Duvidas e suporte</a>
            </div>
            </div>
    </header>
    <div class="main-content">
    {{$slot}}
    </div>
    <footer class="footer-main">
        Developed by <a href="https://www.linkedin.com/in/alisson-xavier-339677173/" target="_blank">Alisson Xavier</a>
    </footer>
</body>
</html>