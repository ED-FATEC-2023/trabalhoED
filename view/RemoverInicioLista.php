<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>C# na Lingua - Adicionando no Inicio</title>

  </head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light" id="navbar" style="background-color: #dcdcdc;">
      <div class="container">

        <img src="../IMG/Logo.png" alt="Logo - C# na lingua" class="LogoSite">
        <span class="navbar-brand font-weight-bold Texto-Dark">Lista Simplesmente Encadeada</span>

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
          <button type="button" id="toggleButton" class="Botao-Principais">Trocar Tema</button>
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

              <h2 class="font-weight-bold">Removendo no começo da Lista</h2>

              <p class="mt-4"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis doloribus, cumque sequi officiis fugiat temporibus illo dicta obcaecati laudantium quaerat, quidem expedita incidunt debitis deleniti perspiciatis quibusdam vero itaque. Nihil.</p>
            
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

        <div class="section-cor2">
            <div class="container FundoProjetos">
                <div class="row">

                    <div class="col-md-6">
                        <div class="card mb-4 CardProjetos">
                            <img class="card-img-top BordaDetalheVermelho" src="https://via.placeholder.com/300x200" alt="Card image cap">
                            <div class="card-body BordaDetalheVermelho Texto-DarkProjeto">

                                <h5 class="card-title">Explicação do Codigo</h5>

                                <p class="card-text">
                                <br>Node: É a classe que define um nó da lista simplesmente encadeada. Ela contém um campo Data para armazenar o valor do nó e um campo Next para apontar para o próximo nó.
                                <br><br>ListaEncadeada: É a classe que representa a lista simplesmente encadeada. Ela possui um campo head que armazena o primeiro nó da lista.
                                <br><br>RemoverInicio: É o método responsável por remover o nó do início da lista. Se a lista estiver vazia (ou seja, head é nulo), uma mensagem é exibida indicando que a lista está vazia. Caso contrário, o head é atualizado para apontar para o próximo nó, efetivamente removendo o antigo head.
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="prompt-container">
<pre class="prompt-text">

  <span class="verde-claro">// Codigo Utilizado </span>

  public class Node
  {
    public int Data;
    public Node Next;
  }

  public class ListaEncadeada
  {

    private Node head;

    public void RemoverInicio()
    {

        if (head == null)
        {
            Console.WriteLine("A lista está vazia.");
            return;
        }

        head = head.Next;

    }

  }

</pre>
                        </div>
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