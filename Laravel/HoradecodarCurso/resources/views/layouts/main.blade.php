<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
    <link href="/css/main.css" rel="stylesheet">
    <!-- css variavel-->
    <link href="@yield('arquivo_css')" rel="stylesheet"
    <!-- google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <navbar class="navbar">
            <div id="burger">
                <div id="burger_lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="dropmenu">
                <div class="sponsored">
                    <h3> Patrocinios:</h3>
                    <img class="logo_patrocinio" src="/src/Adidas-Logo.png" alt="logoaddidas">
                    <img class="logo_patrocinio" src="/src/cocalogo.png" alt="logoaddidas">
                    <img class="logo_patrocinio" src="/src/gol.png" alt="logoaddidas">
                </div>
            </div>
    </navbar>
    <div class="content_home">
    @yield('content')
    </div>
    <footer class="footer_home">
       Tiger Sports &copy; 2022.
    </footer>

    <script src="/js/home.js"></script>
</body>
</html>