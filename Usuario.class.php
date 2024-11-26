<?php
// Classe com funções para logar, sair e verificar se o usuário está logado

class Usuario{
    public function logar($username, $senha): bool{
        global $pdo; // Recebendo a varável global

        // Verificando se o usuário e senha existem no banco de dados, e bindando valores para evitar SQL Injection
        $sql = "SELECT * FROM usuario WHERE username = :username AND senha = :senha";
        $sql = $pdo->prepare(query: $sql);
        $sql->bindValue(param: "username", value: $username);
        $sql->bindValue(param: "senha", value: $senha);
        $sql->execute();

        if($sql->rowCount() > 0){ // Se retornar algum valor, o usuário existe
            $dado = $sql->fetch(); // Fetch: Cria um array recebendo os dados do usuário
            
            $_SESSION['id'] = $dado['id']; // Criando uma sessão para o ID do usuário

            return true;
        }
        else{
            return false;
        }
    }

    public function sair(): void{
        session_destroy(); // Destrói a sessão
        header(header: "Location: login.php"); // Redireciona para a página de login
    }

    public function logged($id): array{
        global $pdo; // Recebendo a variável global

        $array = array(); // Criando um array vazio 

        $sql = "SELECT username FROM usuario WHERE id = :id"; // Selecionando todos os dados do usuário pelo ID
        $sql = $pdo->prepare(query: $sql);
        $sql->bindValue(param: "id", value: $id);
        $sql->execute();

        if($sql->rowCount() > 0){ // Se retornar algum valor, o usuário existe
            $array = $sql->fetch(); // Fetch: Cria um array recebendo os dados do usuário
        }

        return $array;
    }
}
?>