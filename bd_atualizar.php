<?php

include 'conect.php';
/**
 *  Query de Atualização
 * 
 */
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];


$sql = "UPDATE  clientes SET nome='$nome', email='$email' WHERE id =$id";
$results =  mysqli_query($conn, $sql);
if ($results == true) {
    echo 'Atualizado com sucesso!!';
}
mysqli_close($conn);
