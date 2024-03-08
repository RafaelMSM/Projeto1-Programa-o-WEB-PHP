<?php
$host = "localhost";
$bd = "banco_php";
$user = "root";
$senha = "";

try {
  $pdo = new PDO("mysql:host=$host;dbname=$bd", $user, $senha);  //cria a conexão com o banco de dados
  echo "Conexão realizada com sucesso";
} catch (PDOException $e) {
  echo "Erro: {$e->getMessage()}";                                //caso haja algum erro
}
