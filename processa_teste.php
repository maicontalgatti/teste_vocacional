<?php
include('mostrarerros.php');
include("db.php");

$teste_1 = $_POST["teste_1"];
$teste_2 = $_POST["teste_2"];
$teste_3 = $_POST["teste_3"];
$teste_4 = $_POST["teste_4"];
$teste_5 = $_POST["teste_5"];
$teste_6 = $_POST["teste_6"];
$teste_7 = $_POST["teste_7"];
$teste_8 = $_POST["teste_8"];
$teste_9 = $_POST["teste_9"];
$teste_10 = $_POST["teste_10"];
$teste_11 = $_POST["teste_11"];
$teste_12 = $_POST["teste_12"];
$teste_13 = $_POST["teste_13"];
$teste_14 = $_POST["teste_14"];
$teste_15 = $_POST["teste_15"];
$teste_16 = $_POST["teste_16"];
$teste_17 = $_POST["teste_17"];
$teste_18 = $_POST["teste_18"];
$teste_19 = $_POST["teste_19"];
$teste_20 = $_POST["teste_20"];
$teste_21 = $_POST["teste_21"];
$teste_22 = $_POST["teste_22"];
$teste_23 = $_POST["teste_23"];
$teste_24 = $_POST["teste_24"];
$teste_25 = $_POST["teste_25"];
$teste_26 = $_POST["teste_26"];
$teste_27 = $_POST["teste_27"];
$teste_28 = $_POST["teste_28"];
$teste_29 = $_POST["teste_29"];
$teste_30 = $_POST["teste_30"];
$teste_31 = $_POST["teste_31"];
$teste_32 = $_POST["teste_32"];
$teste_33 = $_POST["teste_33"];
$teste_34 = $_POST["teste_34"];
$teste_35 = $_POST["teste_35"];
$teste_36 = $_POST["teste_36"];
$teste_37 = $_POST["teste_37"];
$teste_38 = $_POST["teste_38"];
$teste_39 = $_POST["teste_39"];
$teste_40 = $_POST["teste_40"];
$teste_41 = $_POST["teste_41"];
$teste_42 = $_POST["teste_42"];
$teste_43 = $_POST["teste_43"];
$teste_44 = $_POST["teste_44"];
$teste_45 = $_POST["teste_45"];
$teste_46 = $_POST["teste_46"];
$teste_47 = $_POST["teste_47"];
$teste_48 = $_POST["teste_48"];
$nome_aluno = $_POST["nome_aluno"];
$celular = $_POST["celular"];
$email = $_POST["email"];
$codigoescola = $_POST["codigo"];


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


// echo '$valor_r -'.$valor_r. "<br>" ;
// echo '$valor_i -'.$valor_i. "<br>" ;
// echo '$valor_a -'.$valor_a. "<br>" ;
// echo '$valor_s -'.$valor_s. "<br>" ;
// echo '$valor_e -'.$valor_e. "<br>" ;
// echo '$valor_c -'.$valor_c. "<br>" ;
 

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
    $sql = "INSERT INTO teste_tv (name_aluno, email, celular, realista, investigativo, artitico, social, empreendedor, convencional,codigoescola) VALUES('".$nome_aluno."', '".$email."', ".$celular.",".$valor_r.", ".$valor_i.", ".$valor_a.", ".$valor_s.", ".$valor_e.", ".$valor_c.", '".$codigoescola."')";
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

</html>








































