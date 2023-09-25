<?php
session_start();
require_once "conexao.php";

if (isset($_POST['nome']) && isset($_POST['senha'])) {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    if (empty($nome) || empty($senha)) {
        echo "Preencha todos os campos.";
        exit();
    }

   
    $stmt = $mysqli->prepare("SELECT nome, senha FROM usuarios WHERE nome = ?");
    $stmt->bind_param("s", $nome);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $senhaHash = $row['senha'];

        if (password_verify($senha, $senhaHash)) {
     
            $_SESSION['nome'] = $row['nome'];
            header("Location: ../view/Home.php"); 
            exit();
        } else {
            echo "Senha incorreta. Tente novamente.";
        }
    } else {
        echo "Nome de usuário não encontrado.";
    }
}
?>
