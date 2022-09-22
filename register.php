<?php
    include("config.php");

    $id=null;
    $dni = $_POST['dni'];
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $email = $_POST['email'];

    $sql="INSERT INTO clients VALUES('$id','$dni', '$name','$phone_number','$address','$email')";

    if(mysqli_query($mysqli, $sql)){
        echo '<script language="javascript">';
        echo 'alert("Nuevo usuario agregado");';
        echo 'window.location="index.php";';
        echo '</script>';
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("Usuario no creado");';
        echo 'window.location="index.php";';
        echo '</script>';
    }
?>