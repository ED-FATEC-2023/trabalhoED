<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/cssLogin/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Responsividade -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

</head>

<body>
    <main>
        <section class="Login-a d-flex justify-content-center align-items-center">
            <section class="Login-b col-12 col-md-6 col-lg-4 mt-5">
                <form method="Post" class="needs-validation" action="../model/processamento.php">
                    <div class="form-group">
                        <h1>Login</h1>
                    </div>
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" placeholder="Informe seu nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" class="form-control" placeholder="Informe sua senha" name="senha" required>
                    </div>
                    <button type="submit" class="btn btn-danger" style="margin-bottom: 2rem; margin-top: 1rem"> Entrar </button>
                </form>
                <p>Não tem um login ainda?<a href="cadastro.php"> Cadastrar-se</a></p>
            </section>
        </section>
    </main>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
