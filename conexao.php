<?php

$dsn = 'mysql:host=localhost;dbname=login';
$usuario = 'root';
$senha = 'root';

try{

  $conn = new PDO($dsn, $usuario , $senha);

} catch(PDOException $e) {
  echo 'Erro: '. $e->getCode(). ' Mensagem: '. $e->getMessage();
}