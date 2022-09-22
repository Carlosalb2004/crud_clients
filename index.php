<?php
    include("config.php");
    $sql = "SELECT * FROM clients";
    $query = mysqli_query($mysqli, $sql);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Inicio de Sesion</title>
        <link rel="stylesheet" href="style.css">
        <meta name=""viewport content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
        <title>REGISTRO DE CLIENTES</title>
    </head>
<div>
    <body>
        <form action="register.php" method="POST">
                <h1>REGISTRO DE CLIENTES</h1>
                <input type="text" name="dni" placeholder="DNI" required>
                <br>
                <input type="text" name="name" placeholder="NOMBRE" required>
                <br>
                <input type="text" name="phone_number" placeholder="NUMERO TELEFONICO" required>
                <br>
                <input type="text" name="address" placeholder="DIRECCION" required>
                <br>
                <input type="text" name="email" placeholder="EMAIL" required>
                <br>
                <input type="submit" value="Agregar">
        </form>
    </body>
</div>
<div class="users-table">
    <h2>Usuarios registrados</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Dni</th>
                <th>Nombre</th>
                <th>Numero Telefonico</th>
                <th>Direccion</th>
                <th>Email</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <th><?= $row['id'] ?></th>
                    <th><?= $row['dni'] ?></th>
                    <th><?= $row['name'] ?></th>
                    <th><?= $row['phone_number'] ?></th>
                    <th><?= $row['address'] ?></th>
                    <th><?= $row['email'] ?></th>
                    <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                    <th><a href="delete.php?id=<?= $row['id'] ?>" class="users-table--delete">Eliminar</a></th>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

</html>