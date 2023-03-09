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
        $sql = "SELECT name_aluno, email, celular, realista, investigativo, artitico, social, empreendedor, convencional FROM teste_vocacional.teste_tv where codigoescola = '".$_GET['codigo']."'"; 
            
        $result = $conn->query($sql);

        // Verifica se há resultados
        if ($result->num_rows > 0) {
          echo "<table>";
          echo "<tr>";  
          echo "<th>name_aluno</th>";
          echo "<th>email</th>";
          echo "<th>celular</th>";
          echo "<th>realista</th>";
          echo "<th>investigativo</th>";
          echo "<th>artitico</th>";
          echo "<th>social</th>";
          echo "<th>empreendedor</th>";
          echo "<th>convencional</th>";
          echo "</tr>";
          // Loop para percorrer os resultados e exibi-los na tabela
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";              
          echo "<th>".$row['name_aluno']."</th>";
          echo "<th>".$row['email']."</th>";
          echo "<th>".$row['celular']."</th>";
          echo "<th>".$row['realista']."</th>";
          echo "<th>".$row['investigativo']."</th>";
          echo "<th>".$row['artitico']."</th>";
          echo "<th>".$row['social']."</th>";
          echo "<th>".$row['empreendedor']."</th>";
          echo "<th>".$row['convencional']."</th>"; 
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
 
 

</script>

</html>