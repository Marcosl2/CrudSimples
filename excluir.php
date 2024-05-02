<?php

$id = $_GET['id'];

include 'conect.php';

$sql = "DELETE FROM clientes WHERE id=$id";
$results = mysqli_query($conn,$sql);
if($results==true){
    echo "<p style='color:red;'>Excluido com sucesso</p>";
}
// mysqli_close($conn);
?>
<a href="index.php">Voltar>>>>></a>


