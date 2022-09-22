<?php 
    include("config.php");

    $id=$_GET['id'];

    $sql="SELECT * FROM clients WHERE id='$id'";
    $query=mysqli_query($mysqli, $sql);
    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
        <title>Editar Cliente</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit.php" method="POST">
                <h1>EDITAR CLIENTE</h1>
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="dni" placeholder="Dni" value="<?= $row['dni']?>">
                <input type="text" name="name" placeholder="Nombre" value="<?= $row['name']?>">
                <input type="text" name="phone_number" placeholder="Numero Telefonico" value="<?= $row['phone_number']?>">
                <input type="text" name="address" placeholder="Direccion" value="<?= $row['address']?>">
                <input type="text" name="email" placeholder="Email" value="<?= $row['email']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>