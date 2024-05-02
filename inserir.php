<?php
// Inclui a conexão.
include 'conect.php';

/**
 * 
 * Recebe via metodo Post do formulário 
 * 
 */

$nome = $_POST['nome'];
$email = $_POST['email'];

/**
 * 
 * Query de Inserção.
 * Não precisa do Id.
 * Recebe a Conexao e a Query Sql.
 * 
 */

$sql = "INSERT INTO clientes (nome,email) VALUES('$nome','$email')";
$result = mysqli_query($conn,$sql);
if($result == true){
    echo "<p style='color:green;'>$nome .Cadastrado com sucesso!!!</p>";
}
?>
 <a href="index.php"><input style="margin-top: 5px;" type="button" value="Voltar"></a>