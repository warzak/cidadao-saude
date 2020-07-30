<?php
// usado para conectar ao mysql
$host = "localhost";
$banco = "cidadao_saude";
$usuario = "root";
$senha = "";
  
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
  
// show error
catch(PDOException $exception){
    echo "Erro ao Conectar: " . $exception->getMessage();
}
?>