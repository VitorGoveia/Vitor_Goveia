<?php
    if(isset($_POST['submit'])){
        
        include_once('config.php');
        
        $nome_usuario = $_POST['nome_usuario'];
        $data_nascimento = $_POST['data_nascimento'];
        $email_usuario = $_POST['email_usuario'];
        $senha_usuario = $_POST['senha_usuario'];

        $resultado = mysqli_query($conexao, "INSERT INTO tb_usuarios(nome_usuario, email_usuario, senha_usuario, data_nascimento) VALUES ('$nome_usuario', '$email_usuario','$senha_usuario','$data_nascimento') ");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <title>Cadastro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@1,700&family=Nunito:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Css/estilos.css">
    <link rel="stylesheet" href="Css/normalize.css">
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

    <section id="cadastro">    
        <div id="corpo-form">
            <h2>Cadastro</h2>
            <form action="pagina_cadastro.php" method="POST">
                <input type="text" placeholder="Digite seu nome" name="nome_usuario"><br/>
                <input type="text" placeholder="Digite o email" name="email_usuario"><br/>
                <input type="password" placeholder="Digite a senha" name="senha_usuario"><br/>
                <input type="date" placeholder="Data de nascimento" name="data_nascimento"><br/>
                <input type="submit" name="submit" value="ACESSAR"><br/>
            </form>       
            <a href="pagina_login.php">Já possuo uma conta!</a>
        </div>
    </section>
</body>
</html>