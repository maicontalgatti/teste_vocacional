<?php


ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

    $user= "maicon";
    $senha="focoforcaefe";
    $endereco="52.67.79.110";
    $banco="teste_vocacional";

   $conn = mysqli_connect($endereco, $user, $senha, $banco);
   mysqli_set_charset($conn, "utf8");
   mysqli_error($conn);
   if($conn){
      $query = mysqli_query($conn, "select nome from user_tv");
      while ($row = mysqli_fetch_assoc($query)){
        echo $row["nome"]."<br>";
      }

   } else {
           echo "errou <br>";
   }
?>