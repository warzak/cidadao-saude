<?php
// usado para conectar ao mysql
$host = "localhost";
$dbname = "cidadao_saude";
$username = "teste";
$password = "teste";
  
try {
    $con = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
}
  
// show error
catch(PDOException $exception){
    echo "Erro ao Conectar: " . $exception->getMessage();
}
?>