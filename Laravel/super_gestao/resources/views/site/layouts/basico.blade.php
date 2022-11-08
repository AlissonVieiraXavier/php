<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset("css/estilo_basico.css")}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet"> 
    </head>
    <body>
      @include('site.layouts._partials.topo')
      @yield('content')
    </body>
</html>    