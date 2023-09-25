<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>C# na Lingua - Home</title>

  </head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light" id="navbar" style="background-color: #dcdcdc;">
      <div class="container">

        <img src="../IMG/Logo.png" alt="Logo - C# na lingua" class="LogoSite">
        <span class="navbar-brand font-weight-bold Texto-Dark TituloSiteNAV">Lista Simplesmente Encadeada</span>

        <!--====================-->

        <div class="collapse navbar-collapse text-right" style="display: flex; justify-content: right; margin-right: 5vw;">
          <ul class="navbar-nav Fundo-Botoes-Nav">
            <li class="nav-item">
              <a class="nav-link Botao-Nav Texto-Dark" href="Home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link Botao-Nav Texto-Dark" href="Projetos.php">Projetos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link Botao-Nav Texto-Dark" href="Alunos.php">Alunos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link Botao-Nav Texto-Dark" href="Sobre.php">Sobre</a>
            </li>
          </ul>
        </div>

        <!--====================-->

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <button type="button" id="toggleButton" class="Botao-Principais" style="outline: none !important;">Trocar Tema</button>
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
              (Fatec) dedicados a ensinar sobre o conceito de Lista Simplesmente Encadeada. Nosso objetivo é proporcionar a você 
              um aprendizado completo e prático, fornecendo uma base sólida nesse tópico fundamental 
              para o desenvolvimento de software.</p>

              <a href="Sobre.php" class="Botao-Principais">Ler Mais</a>
            
            </div>
          </div>
        </div>
    </section>

    <!--================================================================================-->

    <section id="projects">
      <div class="container FundoProjetos">

        <div class="row">

          <div class="col-md-12">
            <h2 class="text-center TituloProjetos">Lista Simplesmente Encadeada</h2>
          </div>

        </div>
    
        <!--====================-->

        <div class="row ContainerProjetos">

          <div class="col-md-6">
            <div class="card mb-4 CardProjetos">
              <img class="card-img-top BordaDetalheVermelho" src="https://via.placeholder.com/300x200" alt="Card image cap">
              <div class="card-body BordaDetalheVermelho Texto-DarkProjeto">

                <h5 class="card-title">Adicionando no começo da lista</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vestibulum augue sed massa iaculis.</p>
                
                <a href="AdicionarInicioLista.php" class="Botao-Principais">Aprender</a>

              </div>
            </div>
          </div>

          <!--====================-->

          <div class="col-md-6">
            <div class="card mb-4 CardProjetos">
              <img class="card-img-top BordaDetalheVermelho" src="https://via.placeholder.com/300x200" alt="Card image cap">
              <div class="card-body BordaDetalheVermelho Texto-DarkProjeto">

                <h5 class="card-title">Adicionando no fim da lista</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vestibulum augue sed massa iaculis.</p>
                
                <a href="AdicionarFimLista.php" class="Botao-Principais">Aprender</a>


              </div>
            </div>
          </div>

          <!--====================-->

          <div class="col-md-6">
            <div class="card mb-4 CardProjetos">
              <img class="card-img-top BordaDetalheVermelho" src="https://via.placeholder.com/300x200" alt="Card image cap">
              <div class="card-body BordaDetalheVermelho Texto-DarkProjeto">
                
              <h5 class="card-title">Removendo no começo da lista</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vestibulum augue sed massa iaculis.</p>
                
                <a href="RemoverInicioLista.php" class="Botao-Principais">Aprender</a>
              
              </div>
            </div>
          </div>

          <!--====================-->

          <div class="col-md-6">
            <div class="card mb-4 CardProjetos">
              <img class="card-img-top BordaDetalheVermelho" src="https://via.placeholder.com/300x200" alt="Card image cap">
              <div class="card-body BordaDetalheVermelho Texto-DarkProjeto">
                
                <h5 class="card-title">Removendo no fim da lista</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vestibulum augue sed massa iaculis.</p>
               
                <a href="RemoverFimLista.php" class="Botao-Principais">Aprender</a>
              
              </div>
            </div>
          </div>

          <!--====================-->

          <div class="col-md-6">
            <div class="card mb-4 CardProjetos">
              <img class="card-img-top BordaDetalheVermelho" src="https://via.placeholder.com/300x200" alt="Card image cap">
              <div class="card-body BordaDetalheVermelho Texto-DarkProjeto">
                
                <h5 class="card-title">Pesquisando um valor na lista</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vestibulum augue sed massa iaculis.</p>
                
                <a href="PesquisarLista.php" class="Botao-Principais">Aprender</a>
              
              </div>
            </div>
          </div>

          <!--====================-->

          <div class="col-md-6">
            <div class="card mb-4 CardProjetos">
              <img class="card-img-top BordaDetalheVermelho" src="https://via.placeholder.com/300x200" alt="Card image cap">
              <div class="card-body BordaDetalheVermelho Texto-DarkProjeto">
                
                <h5 class="card-title">Imprimindo os valores da lista</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vestibulum augue sed massa iaculis.</p>
                
                <a href="ImprimirLista.php" class="Botao-Principais">Aprender</a>
              
              </div>
            </div>
          </div>

        </div>

      </div>
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