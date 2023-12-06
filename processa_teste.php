<?php
session_start();
if ($_SESSION['codigo'] == 'true') {
include('mostrarerros.php');
include("db.php");

$teste_1 = $_SESSION['teste_1_tv'];
$teste_2 = $_SESSION['teste_2_tv'];
$teste_3 = $_SESSION['teste_3_tv'];
$teste_4 = $_SESSION['teste_4_tv'];
$teste_5 = $_SESSION['teste_5_tv'];
$teste_6 = $_SESSION['teste_6_tv'];
$teste_7 = $_SESSION['teste_7_tv'];
$teste_8 = $_SESSION['teste_8_tv'];
$teste_9 = $_SESSION['teste_9_tv'];
$teste_10 = $_SESSION['teste_10_tv'];
$teste_11 = $_SESSION['teste_11_tv'];
$teste_12 = $_SESSION['teste_12_tv'];
$teste_13 = $_SESSION['teste_13_tv'];
$teste_14 = $_SESSION['teste_14_tv'];
$teste_15 = $_SESSION['teste_15_tv'];
$teste_16 = $_SESSION['teste_16_tv'];
$teste_17 = $_SESSION['teste_17_tv'];
$teste_18 = $_SESSION['teste_18_tv'];
$teste_19 = $_SESSION['teste_19_tv'];
$teste_20 = $_SESSION['teste_20_tv'];
$teste_21 = $_SESSION['teste_21_tv'];
$teste_22 = $_SESSION['teste_22_tv'];
$teste_23 = $_SESSION['teste_23_tv'];
$teste_24 = $_SESSION['teste_24_tv'];
$teste_25 = $_SESSION['teste_25_tv'];
$teste_26 = $_SESSION['teste_26_tv'];
$teste_27 = $_SESSION['teste_27_tv'];
$teste_28 = $_SESSION['teste_28_tv'];
$teste_29 = $_SESSION['teste_29_tv'];
$teste_30 = $_SESSION['teste_30_tv'];
$teste_31 = $_SESSION['teste_31_tv'];
$teste_32 = $_SESSION['teste_32_tv'];
$teste_33 = $_SESSION['teste_33_tv'];
$teste_34 = $_SESSION['teste_34_tv'];
$teste_35 = $_SESSION['teste_35_tv'];
$teste_36 = $_SESSION['teste_36_tv'];
$teste_37 = $_SESSION['teste_37_tv'];
$teste_38 = $_SESSION['teste_38_tv'];
$teste_39 = $_SESSION['teste_39_tv'];
$teste_40 = $_SESSION['teste_40_tv'];
$teste_41 = $_SESSION['teste_41_tv'];
$teste_42 = $_SESSION['teste_42_tv'];
$teste_43 = $_SESSION['teste_43_tv'];
$teste_44 = $_SESSION['teste_44_tv'];
$teste_45 = $_SESSION['teste_45_tv'];
$teste_46 = $_SESSION['teste_46_tv'];
$teste_47 = $_SESSION['teste_47_tv'];
$teste_48 = $_SESSION['teste_48_tv'];
$nome_aluno = $_SESSION['nome_aluno_tv'];
$celular = $_SESSION['celular_tv'];
$email = $_SESSION['email_tv'];
$codigoescola = $_SESSION['codigoescola_tv'];
//
$preferencia_1 = $_SESSION['preferencia_1_tv']; 
$preferencia_2 = $_SESSION['preferencia_2_tv']; 
$preferencia_3 = $_SESSION['preferencia_3_tv']; 
$preferencia_4 = $_SESSION['preferencia_4_tv']; 
$preferencia_5 = $_POST['preferencia_5'];


// R - Realista
$valor_r = 0; 
$valor_r = $valor_r + $teste_1;
$valor_r = $valor_r + $teste_7;
$valor_r = $valor_r + $teste_13;
$valor_r = $valor_r + $teste_19;
$valor_r = $valor_r + $teste_25;
$valor_r = $valor_r + $teste_31;
$valor_r = $valor_r + $teste_37;
$valor_r = $valor_r + $teste_43;

// I - Investigativo
$valor_i = 0;
$valor_i = $valor_i + $teste_2;
$valor_i = $valor_i + $teste_8;
$valor_i = $valor_i + $teste_14;
$valor_i = $valor_i + $teste_20;
$valor_i = $valor_i + $teste_26;
$valor_i = $valor_i + $teste_32;
$valor_i = $valor_i + $teste_38;
$valor_i = $valor_i + $teste_44;

// A - Artístico
$valor_a = 0;
$valor_a = $valor_a + $teste_3;
$valor_a = $valor_a + $teste_9;
$valor_a = $valor_a + $teste_15;
$valor_a = $valor_a + $teste_21;
$valor_a = $valor_a + $teste_27;
$valor_a = $valor_a + $teste_33;
$valor_a = $valor_a + $teste_39 ;
$valor_a = $valor_a + $teste_45;

// S- Social
$valor_s = 0;
$valor_s = $valor_s + $teste_4;
$valor_s = $valor_s + $teste_10;
$valor_s = $valor_s + $teste_16;
$valor_s = $valor_s + $teste_22;
$valor_s = $valor_s + $teste_28;
$valor_s = $valor_s + $teste_34;
$valor_s = $valor_s + $teste_40;
$valor_s = $valor_s + $teste_46;

// E- Empreendedor
$valor_e = 0;
$valor_e = $valor_e + $teste_5;
$valor_e = $valor_e + $teste_11;
$valor_e = $valor_e + $teste_17;
$valor_e = $valor_e + $teste_23;
$valor_e = $valor_e + $teste_29;
$valor_e = $valor_e + $teste_35;
$valor_e = $valor_e + $teste_41;
$valor_e = $valor_e + $teste_47;

// C- Convencional
$valor_c = 0;
$valor_c = $valor_c + $teste_6;
$valor_c = $valor_c + $teste_12;
$valor_c = $valor_c + $teste_18;
$valor_c = $valor_c + $teste_24;
$valor_c = $valor_c + $teste_30;
$valor_c = $valor_c + $teste_36;
$valor_c = $valor_c + $teste_42;
$valor_c = $valor_c + $teste_48;

 
$array = array(
	array( 'nome' => 'valor_r',	'valor' => $valor_r, 'nome_completo' => 'Realista' ),
	array( 'nome' => 'valor_i',	'valor' => $valor_i, 'nome_completo' => 'Investigativo' ),
	array( 'nome' => 'valor_a',	'valor' => $valor_a, 'nome_completo' => 'Artístico' ),
	array( 'nome' => 'valor_s',	'valor' => $valor_s, 'nome_completo' => 'Social' ),
	array( 'nome' => 'valor_e',	'valor' => $valor_e, 'nome_completo' => 'Empreendedor' ),
	array( 'nome' => 'valor_c',	'valor' => $valor_c, 'nome_completo' => 'Convencional' )
);

// Compara se $a é maior que $b
function cmp($a, $b) {
	return $a['valor'] < $b['valor'];
}

// Ordena
usort($array, 'cmp');

// Mostra os valores
    // echo '<pre>';
    // print_r( $array );
    // echo '</pre>';

    // mostra os top 3
    
    // mysqli_set_charset($conn, "utf8");
    // mysqli_error($conn);

if ($conn) {
    $sql = "INSERT INTO teste_tv (name_aluno, email, celular, realista, investigativo, artitico, social, empreendedor, convencional,codigoescola, preferencia_1, preferencia_2, preferencia_3, preferencia_4, preferencia_5) VALUES('".$nome_aluno."', '".$email."', ".$celular.",".$valor_r.", ".$valor_i.", ".$valor_a.", ".$valor_s.", ".$valor_e.", ".$valor_c.", '".$codigoescola."', '".$preferencia_1."', '".$preferencia_2."', '".$preferencia_3."', '".$preferencia_4."', '".$preferencia_5."')";
    $query = mysqli_query($conn, $sql);
} else {
    echo "errou <br>";
}
?>
 
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
  session_start();
  $_SESSION['codigo'] = 'false';
  session_destroy();
  ?> 

  <main role="main" class="container">

    <div class="starter-template bloco_principal align_center">
      <form method="POST" action="teste.php">
        <h1 class="align_center">Resultado:</h1>
        <p class="align_center"><?php print_r($array[0]['nome_completo'])?> : <?php print_r($array[0]['valor']) ?> </p> 
        <p class="align_center"><?php print_r($array[1]['nome_completo'])?> : <?php print_r($array[1]['valor']) ?> </p> 
        <p class="align_center"><?php print_r($array[2]['nome_completo'])?> : <?php print_r($array[2]['valor']) ?> </p> 
        <p class="align_center"><?php print_r($array[3]['nome_completo'])?> : <?php print_r($array[3]['valor']) ?> </p> 
        <p class="align_center"><?php print_r($array[4]['nome_completo'])?> : <?php print_r($array[4]['valor']) ?> </p> 
        <p class="align_center"><?php print_r($array[5]['nome_completo'])?> : <?php print_r($array[5]['valor']) ?> </p>  
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
<?php
} else {
  header('Location: index.php');
}
?>
</html>








































