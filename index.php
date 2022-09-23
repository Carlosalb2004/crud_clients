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
        <title>Registro de Clientes</title>
        <link rel="stylesheet" type="text/css" href="style.css?ts=<?=time()?>" />
        <meta name=""viewport content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    </head>
<div>
    <body>
    <div class="users-form">
        <form action="register.php" method="POST">
            <br>
                <h1>Ingresar datos del Cliente</h1>
                <input type="text" name="dni" placeholder="DNI" required>
                <input type="text" name="name" placeholder="NOMBRE" required>
                <input type="text" name="phone_number" placeholder="NUMERO TELEFONICO" required>
                <input type="text" name="address" placeholder="DIRECCION" required>              
                <input type="text" name="email" placeholder="EMAIL" required>           
                <input type="submit" value="Agregar">
        </form>
    </div>
    </body>
</div>
<div class="users-table">
    <br>
    <h2>Usuarios registrados</h2>
    <br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>DNI</th>
                <th>NOMBRE</th>
                <th>NUMERO DE TELEFONO</th>
                <th>DIRECCION</th>
                <th>EMAIL</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['dni'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['phone_number'] ?></td>
                    <td><?= $row['address'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></td>
                    <td><a href="delete.php?id=<?= $row['id'] ?>" class="users-table--delete">Eliminar</a></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <br>
    <br>
</div>

</html>