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
</script>
<style>
</style>

<body>
    <?php
header('Content-Type: text/html; charset=iso-8859-1');


ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

// mysqli_set_charset($conn, "utf8");
// mysqli_error($conn);
if ($conn) {
    $query = mysqli_query($conn, "select nome from user_tv");
    while ($row = mysqli_fetch_assoc($query)) {
        echo $row["nome"] . "<br>";
    }
} else {
    echo "errou <br>";
}
   

    ?>
</body>
