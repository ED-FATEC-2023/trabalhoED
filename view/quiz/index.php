<?php
  session_start();
  if(empty($_SESSION)){
    print "<script>location.href='../index.php'</script>";
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz em PHP</title>
  <link rel="stylesheet" href="../../css/quiz.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RwuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

  <div class="quiz-container">
    <h2>TESTE SEU CONHECIMENTO</h2>
    <form action="resultado.php" method="post">
      <!-- Pergunta 1 -->
      <fieldset>
      <legend>1. O que são Estruturas de Dados?</legend>

<label>

  <input type="radio" name="pergunta1" value="3" required> Estruturas de Dados são dispositivos físicos que armazenam código-fonte de programas.

</label>

<label>

  <input type="radio" name="pergunta1" value="2"> Estruturas de Dados são maneiras de organizar e armazenar dados de forma eficiente para facilitar a manipulação e recuperação de informações.

</label>

<label>

  <input type="radio" name="pergunta1" value="4"> Estruturas de Dados são programas de computador que constroem prédios virtuais em jogos.

</label>

<label>

  <input type="radio" name="pergunta1" value="5"> Estruturas de Dados são a linguagem secreta usada pelos programadores para se comunicarem com os computadores.

</label>

</fieldset>



<!-- Pergunta 2 -->

<fieldset>

<legend>2. Qual é a diferença entre uma pilha (stack) e uma fila (queue)?</legend>

<label>

  <input type="radio" name="pergunta2" value="9"> Na programação, uma pilha (stack) é uma estrutura de dados usada para acessar informações secretas, enquanto uma fila (queue) é usada para armazenar informações públicas.

</label>

<label>

  <input type="radio" name="pergunta2" value="10" required> Uma pilha segue o princípio LIFO (Last In, First Out), onde o último elemento inserido é o primeiro a ser removido. Já uma fila segue o princípio FIFO (First In, First Out), onde o primeiro elemento inserido é o primeiro a ser removido.

</label>

<label>

  <input type="radio" name="pergunta2" value="11"> Em uma pilha (stack), os elementos são organizados de forma aleatória, enquanto em uma fila (queue), eles são organizados em ordem alfabética.

</label>

<label>

  <input type="radio" name="pergunta2" value="12"> Uma pilha é usada como uma fila, e uma fila é usada como uma pilha.

</label>

</fieldset>



<!-- Pergunta 3 -->

<fieldset>

<legend>3. Oque é uma fila?</legend>

<label>

  <input type="radio" name="pergunta3" value="70"> Uma fila é um tipo de linha de montagem virtual usada para fabricar produtos digitais.

</label>

<label>

  <input type="radio" name="pergunta3" value="90"> Uma fila é um conjunto de regras que determina a ordem em que os programadores devem se levantar de suas mesas e sair do escritório no final do dia.

</label>

<label>

  <input type="radio" name="pergunta3" value="80" required> Uma fila em estrutura de dados é uma coleção de elementos onde o primeiro elemento a entrar é o primeiro a sair (princípio FIFO). É usada para situações em que a ordem de chegada é crucial, como em sistemas de gerenciamento de tarefas e filas de impressão.

</label>

<label>

  <input type="radio" name="pergunta3" value="100"> Uma fila é um dispositivo eletrônico que armazena músicas para reprodução em um aplicativo de reprodução de música.

</label>

</fieldset>



<!-- Pergunta 4 -->

<fieldset>

<legend>4. Oque é pilha?</legend>

<label>

  <input type="radio" name="pergunta4" value="42"> Uma pilha é uma lista de tarefas a serem executadas em uma ordem específica, onde a tarefa mais importante é a primeira a ser realizada.

</label>

<label>

  <input type="radio" name="pergunta4" value="63"> É usada para organizar dados em ordem crescente e facilitar a pesquisa de informações.

</label>

<label>

  <input type="radio" name="pergunta4" value="49" required> Uma pilha é uma coleção de elementos onde o último elemento adicionado é o primeiro a ser removido. É usada para rastrear chamadas de funções e situações que requerem a inversão da ordem de processamento.

</label>

<label>

  <input type="radio" name="pergunta4" value="56"> Uma pilha é um tipo de arquivo digital onde os documentos são armazenados em uma ordem aleatória e podem ser acessados em qualquer momento.

</label>

</fieldset>



<!-- Pergunta 5 -->

<fieldset>

<legend>5. Qual é a diferença entre uma matriz (array) e uma lista ligada (linked list)?</legend>

<label>

  <input type="radio" name="pergunta5" value="Sim" required> Uma matriz é estática e armazena elementos em locais contíguos de memória, enquanto uma lista ligada é dinâmica e armazena elementos em nós dispersos na memória.

</label>

<label>

  <input type="radio" name="pergunta5" value="Mais ou menos"> Tanto uma matriz quanto uma lista ligada são estruturas de dados estáticas que armazenam elementos em locais contíguos de memória.

</label>

<label>

  <input type="radio" name="pergunta5" value="Não"> Uma matriz é usada quando se deseja armazenar elementos de forma dinâmica, enquanto uma lista ligada é usada para armazenar elementos de forma estática em locais contíguos de memória.

</label>

</fieldset>

      <button type="submit">Enviar</button>

    </form>
  </div>
</body>
</html>
