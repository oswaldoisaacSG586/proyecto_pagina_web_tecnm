<?php

include ("../php/conexion.php");

if(isset($_POST['save_clave'])){
    $clave = $_POST['clave'];
    $password = $_POST['password'];
    $zona = $_POST['zona'];
    
    $query = "insert into claveswifi (clave,password,zona) values ('$clave','$password','$zona')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
      die("Query Failed");
    }
    $_SESSION['message'] = 'Clave agregada satisfactoriamente';
    $_SESSION['message_type'] = 'success';

    header("Location: ../claves.php");
}
?>