<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
    <link href="/css/main.css" rel="stylesheet">
    <!-- css variavel-->
    <link href="@yield('arquivo_css')" rel="stylesheet">
    <!-- css variavel-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- google fonts-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <navbar class="navbar">
            <div class="topnav">
                <div id="burger">
                    <div id="burger_lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="account">
                     <i class="fa-solid fa-user-large"></i>
                </div>
            </div>
            <div class="dropmenu">
                <div class="sponsored">
                    <h3> Patrocinios:</h3>
                    <div>
                        <img class="logo_patrocinio" src="/src/Adidas-Logo.png" alt="logoaddidas">
                        <img class="logo_patrocinio" src="/src/cocalogo.png" alt="logoaddidas">
                        <img class="logo_patrocinio" src="/src/gol.png" alt="logoaddidas"> 
                    </div>
                </div>
                <a href="/" target="_blank">Home</a>
                <a href="#" target="_blank">Agendamentos</a>
                <a href="#" target="_blank">Pagamento</a>
                <a href="#" target="_blank">Renegociar mensalidade</a>
                <a href="#" target="_blank">Reserva Churrasco</a>
                <a href="#" target="_blank">Escolinha de Futebol</a>
            </div>
    </navbar>
    <div class="content_home">
    @yield('content')
    </div>
    <footer class="footer_home">
       SysFut &copy; 2022.
    </footer>

    <script src="/js/home.js"></script>
</body>
</html>