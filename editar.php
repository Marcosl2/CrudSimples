<?php

$id = $_GET['id'];

include 'conect.php';


$sql = "SELECT * FROM clientes WHERE id=$id";
$results =  mysqli_query($conn, $sql);

while ($rows = mysqli_fetch_assoc($results)) {
    $nome = $rows['nome'];
    $email = $rows['email'];
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'APP-NAME' ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1 style="text-align:center;color:	rgb(70, 119, 255);">Atualizar</h1>
    <hr>
    <form action="bd_atualizar.php" method="post">
        <div class="input">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?= $nome ?>">
            <input type="hidden" name="id" value="<?= $id ?>">
        </div>
        <div class="input">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" value="<?= $email ?>">
        </div>

        <div class="input">
            <input class="btn" type="submit" value="Atualizar">
        </div>
    </form>
</body>

</html>