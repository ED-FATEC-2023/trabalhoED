<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/cssLogin">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Cadastro</title>

</head>

<body>
    <main>
        <section class="Cadastro-a d-flex justify-content-center align-items-center">
            <div class="Cadastro-b col-12 col-md-6 col-lg-4 mt-3">
                <form method="Post" class="needs-validation" action="../model/gravar.php">
                    <div class="form-group">
                        <h1>Cadastre-se</h1>
                        <p>Já possui cadastro? <a href="Index.php">Realizar login</a></p>
                    </div>
            </div>
        </section>
        <section class="Cadastro-c d-flex justify-content-center align-items-center">
            <div class="Cadastro-d col-12 col-md-6 col-lg-4 mt-3">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" placeholder="Informe seu nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" class="form-control" placeholder="Informe seu e-mail" name="email" required>
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" class="form-control" placeholder="Informe uma senha" name="senha" minlength="8" required>
                </div>

                <button type="submit" class="btn btn-danger" style="margin-top: 1rem">Cadastrar</button>
            </div>
        </section>

        </form>
    </main>
</body>

</html>