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
      <form method="POST" action="valida_login.php">
        <h1 class="align_center">Nome:</h1>
        <input type="text" name='nome' class="align_center"><br>
        <h1 class="align_center">Senha:</h1>
        <input type="text" name='senha' class="align_center"><br>
        <input type="submit" class="align_center" value="Entrar">
        <!-- <p class="lead align_center">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p> -->
      </form>
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
  var params = new URLSearchParams(window.location.search);
  var erro = params.get('erro'); 
  // if (erro = 'senhaincorreta') {
  //   alert('Login Inválido');
  // };
</script>

</html>