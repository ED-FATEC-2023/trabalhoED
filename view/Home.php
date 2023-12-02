<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>Home</title>

  </head>

<body>

<header>
        <nav class="navbar navbar-expand-lg navbar-light" id="navbar" style="background-color: #dcdcdc;">
            <div class="container">
                <span class="navbar-brand font-weight-bold Texto-Dark TituloSiteNAV">Estrutura de dados</span>
                <div class="collapse navbar-collapse text-right"
                    style="display: flex; justify-content: right; margin-right: 5vw;">
                    <ul class="navbar-nav Fundo-Botoes-Nav">
                        <li class="nav-item">
                            <a class="nav-link Botao-Nav Texto-Dark" href="Home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-expanded="false">
                                    ASSUNTOS
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="lista.php">Lista simplesmente encadeada</a>
                                    <a class="dropdown-item" href="aBinaria.php">Arvore binaria de busca</a>
                                    <a class="dropdown-item" href="aB.php">Arvore B</a>
                                    <a class="dropdown-item" href="aTrie.php">Arvore Trie</a>
                                    <a class="dropdown-item" href="aAVL.php">Arvore AVL</a>
                                    <a class="dropdown-item" href="aRubro.php">Arvore Rubro-Negra</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <button type="button" id="toggleButton" class="Botao-Principais"
                        style="outline: none !important;">Trocar Tema</button>
                </form>
            </div>
        </nav>
    </header>

  <!--================================================================================-->

  <main>

    <section class="ContainerSobre">
        <div class="container my-5 d-flex justify-content-center align-items-center flex-column" style="display: flex; justify-content: center; align-items: center; flex-direction: column">
          <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">

              <h2 class="font-weight-bold">Bem-vindo!</h2>

              <p class="mt-4"> Este site foi desenvolvido por um grupo de alunos da Faculdade de Tecnologia 
              (Fatec) dedicados a ensinar sobre o conceito de Estruturas de . Nosso objetivo é proporcionar a você 
              um aprendizado completo e prático, fornecendo uma base sólida nesse tópico fundamental 
              para o desenvolvimento de software.</p>

            </div>
          </div>
        </div>
    </section>

    <!--================================================================================-->

    <section id="projects">
      <div class="container FundoProjetos">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-center TituloProjetos">SITE PARA EXPLICACAO DE ESTRUTURAS DE DADOS</h2>
          </div>
        </div>
    
        <!--====================-->


    </section>

  </main>

  <!--================================================================================-->

  <footer>
    <div class="container text-center mt-5">
      <p>&copy; 2023 C# na Lingua. Todos os direitos reservados.</p>
    </div>
  </footer>

  <!--================================================================================-->

  <!--BOOTSTRAP-->
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

  <!--================================================================================--> 

  <!--JavaScript-->

  <script>
  
  document.addEventListener('DOMContentLoaded', function() 
  {
    
    var toggleButton = document.getElementById('navbar').querySelector('#toggleButton');
    var body = document.body;
    var navbar = document.getElementById('navbar');

    toggleButton.addEventListener('click', function() 
    {

      body.classList.toggle('dark-mode');
      navbar.classList.toggle('dark-mode');

      toggleButton.textContent = (body.classList.contains('dark-mode')) ? 'Trocar Tema' : 'Trocar Tema';

      if (body.classList.contains('dark-mode')) 
      {
        body.classList.add('dark-mode');
      } 
      else 
      {
        body.classList.remove('dark-mode');
      }

    });

  });

  </script>

</body>
</html>