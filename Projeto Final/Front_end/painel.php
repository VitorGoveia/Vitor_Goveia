<?php
    include('protect.php')
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <title>Painel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@1,700&family=Nunito:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Css/estilos.css">
    <link rel="stylesheet" href="Css/normalize.css">
    <style>
        #painel{
            text-align: center;
            padding: 10px;
            font-size: medium;
        }
        #painel h2{
            text-align: center;
            padding: 10px;
            font-size: medium;
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <nav id="menu">
        <a href="index.php"><img src="imagens/logo.png" alt="Alleat-logo"></a>

        <div class="menu-principal">
            <ul>
                <li><a class="principal" href="index.php#quem-somos">Quem Somos</a></li>
                <li><a class="principal" href="index.php#servicos">Serviços</a></li>
                <li><a class="principal" href="index.php#portifolio">Portifólio</a></li>
                <li><a class="principal" href="index.php#contato">Contato</a></li>
                <li><a class="principal" href="pagina_login.php">Login</a></li>
            </ul>
        </div>

        <div class="redes-sociais">
            <ul>
                <li><a href="#"><img src="imagens/instagram.png" alt="instagram"></a></li>
                <li><a href="#"><img src="imagens/face.png" alt="facebook"></a></li>
                <li><a href="#"><img src="imagens/tw.png" alt="twitter"></a></li>
                <li><a href="#"><img src="imagens/linkedin.png" alt="linkedin"></a></li>
            </ul>
        </div>
    </nav>

    <header id="topo">
        <img src="imagens/logo-centro.png" alt="Alleart">
        <h2> Onde a arte, a fotografia, o vídeo e a tecnologia se encontram!</h2>
    </header>

    <section id="painel">    
    <h2>Painel</h2>
    <p>Bem vindo ao Painel, <?php echo $_SESSION['nome_usuario']; ?></p>
    <p>Aqui você terá informações sobre a sua sessão, e futuramente receberá notidicações únicas que condizem com suas preferências!</p><br/>
    <p>
        <a href="logout.php">Finalizar sessão</a>
    </p>
    </section>
</body>

</html>