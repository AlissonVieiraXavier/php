<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document Register - @yield('name')</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
</head>
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
                <a href="/home" target="_blank">Home</a>
                <a href="/novo" target="_blank">Registrar novo</a>
                <a href="/documentos" target="_blank">Documentos armazenados</a>
                <a href="/duvidas" target="_blank">Duvidas e suporte</a>
            </div>
            </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="footer-main">
        Developed by <a href="https://www.linkedin.com/in/alisson-xavier-339677173/" target="_blank">Alisson Xavier</a>
    </footer>