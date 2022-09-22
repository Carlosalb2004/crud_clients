<?php
    include("config.php");

    $id = $_POST['id'];
    $dni=$_POST['dni'];
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $email = $_POST['email'];
   
    $sql="UPDATE clients SET dni='$dni', name='$name', phone_number='$phone_number', address='$address', email='$email' WHERE id='$id'";

    if(mysqli_query($mysqli, $sql)){
        echo '<script language="javascript">';
        echo 'alert("Usuario modificado");';
        echo 'window.location="index.php";';
        echo '</script>';
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("Usuario no modificado");';
        echo 'window.location="register.php";';
        echo '</script>';
    }
?>