<?php 


include("db.php");
include("mostrarerros.php");

$escola = $_POST['escola'];
$ano = $_POST['ano'];
$turma = $_POST['turma'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];

// echo '$escola: '.$escola.'<br>';
// echo '$cidade: '.$cidade.'<br>';
// echo '$estado: '.$estado.'<br>';
$bytes = random_bytes(4);
$code = bin2hex($bytes);

$characters = '0123456789';
$charactersLength = strlen($characters);
$randomString = '';

for ($i = 0; $i < 8; $i++) {
    $index = hexdec(substr($code, $i * 2, 2));
    $randomString .= $characters[$index % $charactersLength];
}

// echo $randomString;
$codigo = $randomString;

$escola = $ano . ' - ' . $escola . ' - ' . $turma;

if ($conn) {
    $sql = "INSERT INTO teste_vocacional.escola_tv (nome, cidade, estado, codigo) VALUES('".$escola."', '".$cidade."', '".$estado."', '".$codigo."')";
    $query = mysqli_query($conn, $sql);
    // echo 'foi <br>';
    // echo "SQL INSERT INTO teste_vocacional.escola_tv (nome, cidade, estado, codigo) VALUES('".$escola."', '".$cidade."', '".$estado."', '".$codigo."')";
    
    Header('Location: admin_logado.php');
} else {
    echo "errou <br>";
    Header('Location: admin.php?erro=dbproblem');
}

