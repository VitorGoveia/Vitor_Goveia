<?php
    $db_servidor = 'Localhost';
    $db_usuario = 'root';
    $db_senha = '';
    $db_nomeDB = 'db_alleart';

    $conexao = new mysqli($db_servidor, $db_usuario, $db_senha, $db_nomeDB);

    if($conexao -> connect_errno){
        echo "Erro";
    }else{
        echo "Conexão efetuada com sucesso!";
    }
?>