<?php
session_start();
if ($_SESSION['codigo'] == 'true') {

?>
  <!doctype html>
  <html lang="pt">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Escala de interesses vocacionais</title>

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

    // global $preferencia_3_tv;
    $_SESSION['preferencia_3_tv'] = $_POST["preferencia_3"]; 

    ?>

    <main role="main" class="container">

      <div class="starter-template bloco_principal align_center">
        <h3 class="align_center">Escala de Interesses Vocacionais (EIV)</h3>
        <p class="lead align_center p_text"></p>
        <!-- Colocar uma table pequena aqui -->

        <form method="post" action="pergunta_5.php">
          <table id="tabela_teste" style="width:80%">
            <tr>
            <td> Se tivesse a oportunidade de escolher uma quarta graduação, qual seria a área de estudo que despertaria seu maior interesse e motivação?</td>
            </tr>
            <tr>
            <td>
              <select name='preferencia_4' style='width:100%'>
                
              <?php
                  $sql = "SELECT id,nome FROM cursos";
                  $query = mysqli_query($conn, $sql);
                  // Verificar se a consulta retornou resultados
                  if ($query) {
                    while ($row = mysqli_fetch_assoc($query)) {
                      echo "<option value='" . $row['id'] . "' >" . $row['nome'] . "</option>";
                    }
                  } else {
                    echo "Erro na consulta: " . mysqli_error($conn);
                  }

                  // Fechar a conexão
                  mysqli_close($conn);
                  ?>
              </select>
            </td>
            </tr>
          </table>
          <br>
          <input type="submit" value="enviar">
          <br>
          <br>
        </form>

      </div>


    </main><!-- /.container -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
      window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>

  </html>

<?php
} else {
  header('Location: index.php');
}
?>