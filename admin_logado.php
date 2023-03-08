<!doctype html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>Teste Vocacional</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

  <!-- Bootstrap core CSS -->
  <link href="bootstrap-4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="starter-template.css" rel="stylesheet">

  <!-- Custom styles personal -->
  <link href="css/index.css" rel="stylesheet">
</head>

<body class="img_back">
  <?php
  include("db.php");

  ?>
  <main role="main" class="container">


    <div class="starter-template bloco_principal align_center">

      <h1 class="align_center">Bem vindo Professor!</h1>

      <button id="btn-cadastro">Cadastrar nova escola</button>

      <div>

        <?php
        // Consulta SQL para selecionar os dados
        $sql = "SELECT nome, codigo FROM escola_tv";
        $result = $conn->query($sql);

        // Verifica se há resultados
        if ($result->num_rows > 0) {
          echo "<table>";
          echo "<tr>"; 
          echo "<th>escola</th>";
          echo "<th>link</th>";
          echo "</tr>";
          // Loop para percorrer os resultados e exibi-los na tabela
          while ($row = $result->fetch_assoc()) {
            echo "<tr>"; 
            echo "<td>" . $row["nome"] . "</td>";
            echo "<td> <a id='".$row["codigo"] ."' onclick='copyLink(id)'>index.php?codigo=".$row["codigo"] ."</a> </td>";

            echo "</tr>";
          }
          echo "</table>";
        } else {
          echo "Não há resultados.";
        }
        // Fecha a conexão com o banco de dados
        $conn->close();

        ?>


<!-- <p>Este é o link que você deseja copiar:</p>
    <p id="link">https://www.example.com</p>
    <button onclick="copyLink()">Copiar link</button> -->


      </div>









    </div>
    <div class="modal" id="modal-cadastro">
      <div class="modal-content ">
        <span class="close">&times;</span>
        <h2 class="align_center">Formulário de Cadastro</h2>
        <form class="align_center" method="post" action="cadastra_escola.php">
          <label for="escola">Escola:</label>
          <input type="text" id="escola" name="escola" required>
          <bR>
          <label for="cidade">Cidade:</label>
          <input type="text" id="cidade" name="cidade" required>
          <br>
          <label for="estado">Estado:</label>
          <input type="text" id="estado" name="estado" required>
          <br>
          <input type="submit" value="cadastrar">
        </form>
      </div>
    </div>


  </main><!-- /.container -->

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="../../assets/js/vendor/popper.min.js"></script>
  <script src="../../dist/js/bootstrap.min.js"></script>
</body>

<script>
  //modal

  var btnCadastro = document.getElementById("btn-cadastro");
  var modalCadastro = document.getElementById("modal-cadastro");
  var closeModal = document.getElementsByClassName("close")[0];

  btnCadastro.onclick = function() {
    modalCadastro.style.display = "block";
  }

  closeModal.onclick = function() {
    modalCadastro.style.display = "none";
  }

  window.onclick = function(event) {
    if (event.target == modalCadastro) {
      modalCadastro.style.display = "none";
    }
  }




  function copyLink(link) {
        // Seleciona o elemento com o id "link"
        const linkElement = "localhost:81/index.php?codigo="+link;
        
        // Seleciona o texto do link
        // const linkText = linkElement.innerText;
        const linkText = linkElement;
        
        // Cria um elemento de texto temporário
        const tempElement = document.createElement("textarea");
        
        // Define o valor do elemento de texto temporário para o texto do link
        tempElement.value = linkText;
        
        // Adiciona o elemento de texto temporário à página
        document.body.appendChild(tempElement);
        
        // Seleciona o texto no elemento de texto temporário
        tempElement.select();
        
        // Copia o texto selecionado para a área de transferência
        document.execCommand("copy");
        
        // Remove o elemento de texto temporário da página
        document.body.removeChild(tempElement);
        
        // Exibe uma mensagem de sucesso
        alert("Link copiado para a área de transferência!");
      }

</script>

</html>