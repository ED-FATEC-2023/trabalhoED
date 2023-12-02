<?php

session_start();

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING );
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$criptografada = md5($senha);


$result_usuario = "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome','$email', '$criptografada')";
$result_usuario = mysqli_query($conn, $result_usuario);

if (mysqli_insert_id($conn))
{
    $_SESSION['msg'] = "<p style='color:blue; font-family: 'Poppins', sans-serif;;
    font-size: 10.0px; text-align: center ;'> *Cadastro realizado com sucesso!</p>";
    
    header("Location: ../view/Home.php");
}

else
{
    $_SESSION['msg'] = "<p style='color:red;'>Erro ao realizar o cadastrar!</p>";
	header("Location: ../view/cadastro.php");
}
?>