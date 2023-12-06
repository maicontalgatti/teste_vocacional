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

    // global $teste_1_tv ;
    $_SESSION['teste_1_tv'] = $_POST["teste_1"];
    // global $teste_2_tv ;
    $_SESSION['teste_2_tv'] = $_POST["teste_2"];
    // global $teste_3_tv ;
    $_SESSION['teste_3_tv'] = $_POST["teste_3"];
    // global $teste_4_tv ;
    $_SESSION['teste_4_tv'] = $_POST["teste_4"];
    // global $teste_5_tv ;
    $_SESSION['teste_5_tv'] = $_POST["teste_5"];
    // global $teste_6_tv ;
    $_SESSION['teste_6_tv'] = $_POST["teste_6"];
    // global $teste_7_tv ;
    $_SESSION['teste_7_tv'] = $_POST["teste_7"];
    // global $teste_8_tv ;
    $_SESSION['teste_8_tv'] = $_POST["teste_8"];
    // global $teste_9_tv ;
    $_SESSION['teste_9_tv'] = $_POST["teste_9"];
    // global $teste_10_tv ;
    $_SESSION['teste_10_tv'] = $_POST["teste_10"];
    // global $teste_11_tv ;
    $_SESSION['teste_11_tv'] = $_POST["teste_11"];
    // global $teste_12_tv ;
    $_SESSION['teste_12_tv'] = $_POST["teste_12"];
    // global $teste_13_tv ;
    $_SESSION['teste_13_tv'] = $_POST["teste_13"];
    // global $teste_14_tv ;
    $_SESSION['teste_14_tv'] = $_POST["teste_14"];
    // global $teste_15_tv ;
    $_SESSION['teste_15_tv'] = $_POST["teste_15"];
    // global $teste_16_tv ;
    $_SESSION['teste_16_tv'] = $_POST["teste_16"];
    // global $teste_17_tv ;
    $_SESSION['teste_17_tv'] = $_POST["teste_17"];
    // global $teste_18_tv ;
    $_SESSION['teste_18_tv'] = $_POST["teste_18"];
    // global $teste_19_tv ;
    $_SESSION['teste_19_tv'] = $_POST["teste_19"];
    // global $teste_20_tv ;
    $_SESSION['teste_20_tv'] = $_POST["teste_20"];
    // global $teste_21_tv ;
    $_SESSION['teste_21_tv'] = $_POST["teste_21"];
    // global $teste_22_tv ;
    $_SESSION['teste_22_tv'] = $_POST["teste_22"];
    // global $teste_23_tv ;
    $_SESSION['teste_23_tv'] = $_POST["teste_23"];
    // global $teste_24_tv ;
    $_SESSION['teste_24_tv'] = $_POST["teste_24"];
    // global $teste_25_tv ;
    $_SESSION['teste_25_tv'] = $_POST["teste_25"];
    // global $teste_26_tv ;
    $_SESSION['teste_26_tv'] = $_POST["teste_26"];
    // global $teste_27_tv ;
    $_SESSION['teste_27_tv'] = $_POST["teste_27"];
    // global $teste_28_tv ;
    $_SESSION['teste_28_tv'] = $_POST["teste_28"];
    // global $teste_29_tv ;
    $_SESSION['teste_29_tv'] = $_POST["teste_29"];
    // global $teste_30_tv ;
    $_SESSION['teste_30_tv'] = $_POST["teste_30"];
    // global $teste_31_tv ;
    $_SESSION['teste_31_tv'] = $_POST["teste_31"];
    // global $teste_32_tv ;
    $_SESSION['teste_32_tv'] = $_POST["teste_32"];
    // global $teste_33_tv ;
    $_SESSION['teste_33_tv'] = $_POST["teste_33"];
    // global $teste_34_tv ;
    $_SESSION['teste_34_tv'] = $_POST["teste_34"];
    // global $teste_35_tv ;
    $_SESSION['teste_35_tv'] = $_POST["teste_35"];
    // global $teste_36_tv ;
    $_SESSION['teste_36_tv'] = $_POST["teste_36"];
    // global $teste_37_tv ;
    $_SESSION['teste_37_tv'] = $_POST["teste_37"];
    // global $teste_38_tv ;
    $_SESSION['teste_38_tv'] = $_POST["teste_38"];
    // global $teste_39_tv ;
    $_SESSION['teste_39_tv'] = $_POST["teste_39"];
    // global $teste_40_tv ;
    $_SESSION['teste_40_tv'] = $_POST["teste_40"];
    // global $teste_41_tv ;
    $_SESSION['teste_41_tv'] = $_POST["teste_41"];
    // global $teste_42_tv ;
    $_SESSION['teste_42_tv'] = $_POST["teste_42"];
    // global $teste_43_tv ;
    $_SESSION['teste_43_tv'] = $_POST["teste_43"];
    // global $teste_44_tv ;
    $_SESSION['teste_44_tv'] = $_POST["teste_44"];
    // global $teste_45_tv ;
    $_SESSION['teste_45_tv'] = $_POST["teste_45"];
    // global $teste_46_tv ;
    $_SESSION['teste_46_tv'] = $_POST["teste_46"];
    // global $teste_47_tv ;
    $_SESSION['teste_47_tv'] = $_POST["teste_47"];
    // global $teste_48_tv ;
    $_SESSION['teste_48_tv'] = $_POST["teste_48"];
    // global $nome_aluno_tv ;
    $_SESSION['nome_aluno_tv'] = $_POST["nome_aluno"];
    // global $celular_tv ;
    $_SESSION['celular_tv'] = $_POST["celular"];
    // global $email_tv ;
    $_SESSION['email_tv'] = $_POST["email"];
    // global $codigo_tv ;
    $_SESSION['codigoescola_tv'] = $_POST["codigo"];
    //


    ?>

    <main role="main" class="container">

      <div class="starter-template bloco_principal align_center">
        <h3 class="align_center">Escala de Interesses Vocacionais (EIV)</h3>
        <p class="lead align_center p_text"></p>
        <!-- Colocar uma table pequena aqui -->

        <form method="post" action="pergunta_2.php">
          <table id="tabela_teste" style="width:80%">
            <tr>
              <td> Qual graduação você mais tem interesse em cursar? </td>
            </tr>
            <tr>
              <td>
                <select name='preferencia_1' style='width:100%'>

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