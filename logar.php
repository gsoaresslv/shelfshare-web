<?php
// Arquivo de existência do usuário no banco de dados 

// Verifica se o usuário e senha foram preenchidos
if(isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['senha']) && !empty($_POST['senha'])){
    
    // Requisitando os arquivos necessários para conexão e instância da classe
    require 'conexao.php';
    require 'Usuario.class.php';

    // Instanciando a classe
    $usuario = new Usuario();
    

    // Recebendo os valores do formulário
    $username = addslashes($_POST['usuario']);
    $senha = addslashes($_POST['senha']);

    if($usuario->logar($username, $senha)){
        if(isset($_SESSION['id'])){
            header("Location: inicial.php");
        }
        else{
            header("Location: login.php");
        }
    }
    else{
        header("Location: login.php");
    }

}else{
    header("Location: login.php");
}



?>