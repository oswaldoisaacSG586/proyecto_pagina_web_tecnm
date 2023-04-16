<?php

include ("../php/conexion.php");

if(isset($_GET['id'])){
    $id = $_GET ['id'];
    $query = "delete from claveswifi where id = $id";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("Query Failed");
    }
    $_SESSION['message'] = 'Clave eliminada';
    $_SESSION['message_type'] = 'danger';

    header("Location: ../claves.php");
}
?>