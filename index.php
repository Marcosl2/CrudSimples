<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'APP-NAME' ?></title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <h1>Cadastro de Clientes</h1>
    <?php

    include 'conect.php';

    $sql = "SELECT * FROM clientes";
    $rows = mysqli_query($conn, $sql);

    ?>

    <table border="1">
        <thead>
            <tr>
                <th>Nome:</th>
                <th>E-mail:</th>
                <th>Ações</th>
            </tr>

        </thead>
        <tbody>
            <?php
            while ($results = mysqli_fetch_assoc($rows)) {
            ?>
                <tr>
                    <td><?= $results['nome'] ?></td>
                    <td><?= $results['email'] ?></td>
                    <td><a href="editar.php?id=<?= $results['id'] ?>"> Editar</a></td>
                    <td><a href="excluir.php?id=<?= $results['id'] ?>"> Excluir </a></td>
                </tr>
            <?php

            }
            mysqli_close($conn);
            ?>
        </tbody>

    </table>
    <a href="formulario.html"><input style="margin-top: 5px; background-color:blue; color:#fff;" type="button" value="Cadastrar"></a>
</body>

</html>