<?php
include './config.php';
/**
 * 
 * Conexao com o Banco de Dados. 
 * 
 * 
 */
$conn = mysqli_connect(HOST,USER,PASS,DBNAME);

if ($conn->connect_error) {
    die("falha na conexão: " . $conn->connect_error);
  }
  
  // echo  "<h1 style='text-align:center; color:green;' >Conectado com Sucesso!!!</h1>";
  ?>