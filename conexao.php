<?php

$dsn = 'mysql:host=localhost;dbname=login';
$usuario = 'root';
$senha = 'root';

global $conn;


try{

  $conn = new PDO($dsn, $usuario , $senha);

} catch(PDOException $e) {
  echo 'Erro:' . $e->getMessage();
}