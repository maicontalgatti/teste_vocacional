<!doctype html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>Starter Template for Bootstrap</title>

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

  $sql = "SELECT codigo FROM escola_tv";
  $result = $conn->query($sql);
  $codigos_arr = [];
  $i = 0;
  // Verifica se há resultados
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $codigos_arr[$i] = $row['codigo'];
      $i++;
    }
  } else {
  } 
  $conn->close(); 
  ?>

  <main role="main" class="container">

    <div class="starter-template bloco_principal align_center">
      <form method="POST" action="teste.php">
        <h1 class="align_center">Nome:</h1>
        <input type="text" name='nome_aluno' class="align_center" required><br>
        <h1 class="align_center">Codigo escola:</h1>
        <input type="text" name='codigo' id='codigo' class="align_center" required><br>
        <input type="button" class="align_center" value="Iniciar" onclick="teste_codigo_escola()">

        <!-- <p class="lead align_center">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p> -->
      </form>
    </div>



  </main><!-- /.container -->

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
    function teste_codigo_escola() {
      
      array_codigos = <?php echo json_encode($codigos_arr) ?>;
      valor_testado = document.getElementById('codigo').value;
      console.log(array_codigos);
      console.log(valor_testado);
      if (array_codigos.indexOf(valor_testado) > -1) {
        // alert("Encontrou"); 
        <?php
         session_start();
        $_SESSION['codigo'] = 'true';
        ?>
        window.location.href = "teste.php";
        
      } else {
        alert("Código de escola incorreto");
      }
    }



    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="../../assets/js/vendor/popper.min.js"></script>
  <script src="../../dist/js/bootstrap.min.js"></script>
</body>

</html>