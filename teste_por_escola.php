<?php 


include("db.php");
include("mostrarerros.php");

$codigo = $_GET['codigo']; 


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

