<?php
include('conexao_login.php');

if(isset($_POST['email_usuario']) || isset($_POST['senha_usuario'])){
    if(strlen($_POST['email_usuario']) == 0) {
        echo "Preencha seu e-mail";
    }else if(strlen($_POST['senha_usuario'] == 0)) {
        echo "Preencha sua senha";
    }else{

        $email_usuario = $mysqli->real_escape_string($_POST['email_usuario']);
        $senha_usuario = $mysqli->real_escape_string($_POST['senha_usuario']);
    
        $sql_code = "SELECT * FROM tb_usuarios WHERE email_usuario = '$email_usuario' AND senha_usuario = '$senha_usuario'"; 
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            $_SESSION['nome_usuario'] = $usuario['nome_usuario'];

            header("Location: painel.php");

            echo $usuario;
        }
        
        else{
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
        
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@1,700&family=Nunito:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Css/estilos.css">
    <link rel="stylesheet" href="Css/normalize.css">
</head>
<body>
    <nav id="menu">
        <a href="index.html"><img src="imagens/logo.png" alt="Alleat-logo"></a>

        <div class="menu-principal">
            <ul>
                <li><a class="principal" href="index.html#quem-somos">Quem Somos</a></li>
                <li><a class="principal" href="index.html#servicos">Serviços</a></li>
                <li><a class="principal" href="index.html#portifolio">Portifólio</a></li>
                <li><a class="principal" href="index.html#contato">Contato</a></li>
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

    <section id="login">    
        <div id="corpo-form">
            <h2>Login</h2>
            <form action="pagina_login.php" method="POST">
                <input type="text" placeholder="Usuário" name="email_usuario"><br/>
                <input type="password" placeholder="Senha" name="senha_usuario"><br/>
                <input type="submit" value="ACESSAR"><br/>
            </form>
            <a href="pagina_cadastro.php">Ainda não é inscrito?<strong> Cadastre-se!</strong></a>
        </div>
    </section>
</body>
</html> 