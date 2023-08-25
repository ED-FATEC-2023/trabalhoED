<?php

session_start();
require_once "conexao.php";

// Cadastro de usuários
if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) 
{
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    inserirUsuario($nome, $email, $senha);
    
    header('Location: ../view/Home.php');
    die();
}

?>
