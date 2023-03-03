<?php 


include("db.php");
include("mostrarerros.php");

$nome = $_POST['nome'];
$senha = $_POST['senha'];

if ($conn) {
    $query = mysqli_query($conn, "select * from user_tv where nome='".$nome."' and password='".$senha."' ");
    
if (mysqli_num_rows($query) > 0) {
        //O login foi bem sucedido
       echo "Login bem sucedido!";
    } else {
        //O login falhou
        echo "Usuário ou senha inválidos!";
    }



} else {
    echo "errou <br>";
}
