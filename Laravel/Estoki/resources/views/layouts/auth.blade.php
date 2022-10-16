<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('/img/logo_app.png')}}">
    <link rel="stylesheet" href="{{asset('/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('/css/navbar.css')}}">
    <title>@yield('title') - Estoki</title>
</head>
<body>
    @yield('content')

    
    <script src="{{asset('/js/navbar.js')}}"></script>
</body>
</html>