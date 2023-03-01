<?php
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
include("db.php");
// include("../Db/class.db.php");
// include("matheval.php");
// include("../mostrarerros.php");
# 1. Incluindo a biblioteca CSV
// require_once './lib/ARQUIVOS/csv.class.php';
# 2. Incluindo as funções para módulos 

//requires
// require_once 'fn_graficos.php';
// require_once 'fn_alarmes.php';
// require_once 'fn_log_user.php';
// require_once 'fn_log_lab_ext.php';
// require_once 'fn_cadastro_usuario.php';
// require_once 'fn_nivel_dos_tanques.php';
// require_once 'fn_diferenca_dos_tanques.php';
// require_once 'fn_grafico_combinado.php';
// require_once 'fn_grafico_historico.php';
// require_once 'fn_vazao_supervisorio.php';
// require_once 'fn_relatorio_dia.php';
// require_once 'fn_balanca_fluxo.php';
// require_once 'fn_carregamentos.php';
// require_once 'fn_descarregamentos.php';
// require_once 'fn_lancamento.php';
// require_once 'fn_cadastro_analise.php';
// require_once 'fn_grafico_analise.php';
// require_once 'fn_relatorio_diario_analise.php'; 
// require_once 'fn_horimetros.php';
// require_once 'fn_cadastro_de_manutencao.php';
// require_once 'fn_itens_horimetros.php';
// require_once 'fn_pre_cadastro_manutencao.php';
// require_once 'fn_itens_pre_cadastro_manutencao.php';
// require_once 'fn_industrializacao.php';
// require_once 'fn_perdas_de_hexano.php';
// require_once 'fn_vazao_grafico_diario.php';
// require_once 'fn_vazao_grafico_mensal.php';
// require_once 'fn_vazao_grafico_historico.php';
// require_once 'fn_produtos_cad_lotes.php';
// require_once 'fn_produtos_cad_produtos.php';
// require_once 'fn_relatorio_mensal.php';
// require_once 'fn_vazao.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Menu">
    <meta name="modification" content="Maicon Talgatti">
    <meta name="keyword" content="Menu">
    <!-- <link rel="shortcut icon" href="../Figuras/favicon.png"> -->
    <!-- <link class="include" rel="stylesheet" type="text/css" href="dist/jquery.jqplot.min.css" /> -->
    <!-- <link type="text/css" rel="stylesheet" href="dist/syntaxhighlighter/styles/shCoreDefault.min.css" /> -->
    <!-- <link type="text/css" rel="stylesheet" href="dist/syntaxhighlighter/styles/shThemejqPlot.min.css" /> -->
    <!-- <script class="include" type="text/javascript" src="dist/jquery.min.js"></script> -->
    <title>Teste Vocacional</title>
    <!-- <script src="js/jquery-3.6.1.min.js"></script> -->
    <!-- Jquery from Google -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- Bootstrap CSS -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- bootstrap theme -->
    <!-- <link href="css/bootstrap-theme.css" rel="stylesheet"> -->
    <!--external css-->
    <!-- font icon -->
    <!-- <link href="css/elegant-icons-style.css" rel="stylesheet" /> -->
    <!-- <link href="css/font-awesome.min.css" rel="stylesheet" /> -->
    <!-- Custom styles -->
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <!-- <link href="css/style-responsive.css" rel="stylesheet" /> -->

    <!-- full calendar css-->
    <!-- <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" /> -->
    <!-- <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" /> -->

    <!-- Custom styles -->
    <!-- <link rel="stylesheet" href="css/fullcalendar.css"> -->
    <!-- <link href="css/widgets.css" rel="stylesheet"> -->
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <!-- <link href="css/style-responsive.css" rel="stylesheet" /> -->
    <!-- <link href="css/xcharts.min.css" rel=" stylesheet"> -->
    <!-- <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet"> -->

    <!-- <script src="/Formas/jquery-validation-1.19.3/dist/jquery.validate.js"></script> -->
    <!-- <script src="https://cdn.amcharts.com/lib/4/core.js"></script> -->
    <!-- <script src="https://cdn.amcharts.com/lib/4/charts.js"></script> -->
    <!-- <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script> -->

    <!-- <link rel="stylesheet" href="css/index_min.css"> -->
    <!-- <link rel="stylesheet" href="styles.css"> -->

</head>
<script>
    // var aux_disable_button = 0;
    // var editando_ou_nao = 0;
    // var auto_inc = 0;
    // var num_hr_edtx = 0;
    // var num_of_horario = 0;
</script>
<style>
</style>

<body>
    <?php



$servername = "52.67.79.110";
$username = "maicon";
$password = "focoforcaefe";
$dbname = "teste_vocacional";
//http://intranet.ampla.ind.br/phpmyadmin/
// include "mostrarerros.php";

//$conn= mysqli_connect($servername, $username, $password, $dbname);
//$conn_oo = new mysqli($servername, $username, $password, $dbname);
$con = mysqli_connect($servername, $username, $password, $dbname);
$con2 = mysqli_connect($servername, $username, $password, $dbname);


    $sql = "SELECT * FROM user_tv";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo 'nome ' . $row[''] . '<br>';
    }

    // $servername = "52.67.79.110";
    // $username = "maicon";
    // $password = "focoforcaefe";
    // $dbname = "teste_vocacional";

    // // Create connection
    // $conn = mysqli_connect($servername, $username, $password, $dbname);
    // // Check connection
    // if (!$conn) {
    //   die("Connection failed: " . mysqli_connect_error());
    // }

    // $sql = "SELECT * FROM user_tv";
    // $result = mysqli_query($conn, $sql);

    // if (mysqli_num_rows($result) > 0) {
    //   // output data of each row
    //   while($row = mysqli_fetch_row ($result)) {
    //     echo "id: " . $row["id"]. " - Name: " . $row["nome"]. " <br>";
    //   }
    // } else {
    //   echo "0 results";
    // }

    // mysqli_close($conn);



    // $conn = OpenCon();
    // if ($conn) {
    //     echo "Connected Successfully";
    // };



    // // $sql = mysqli_query($conn, "SELECT * FROM user_tv");
    // $sql = "SELECT * FROM user_tv";

    // $result = $conn->query($sql);

    // while ($row = $result->fetch_assoc()) {
    //     echo "nome: " . $row["nome"];
    // };
    // CloseCon($conn);


    ?>
</body>