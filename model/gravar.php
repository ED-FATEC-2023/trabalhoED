<?php
session_start();
include('../model/conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

   
    if (empty($nome) || empty($email) || empty($senha)) {
        echo "Preencha todos os campos.";
        exit();
    }

    $stmt = $mysqli->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Este e-mail já está cadastrado. Use outro e-mail.";
        exit();
    }

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);


    $stmt = $mysqli->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $senhaHash);

    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso!";
        header("Location: ../view/Index.php"); 
        exit();
    } else {
        echo "Erro ao cadastrar o usuário. Tente novamente mais tarde.";
        exit();
    }
}
?>
