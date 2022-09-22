<?php
    include("config.php");

    $id = $_GET['id'];

    $sql="DELETE FROM clients WHERE id='$id'";

    if(mysqli_query($mysqli, $sql))
    {
        echo '<script language="javascript">';
        echo 'alert("Usuario eliminado");';
        echo 'window.location="index.php";';
        echo '</script>';
    }
    else
    {
        echo '<script language="javascript">';
        echo 'alert("Usuario no eliminado");';
        echo 'window.location="index.php";';
        echo '</script>';
    }
?>