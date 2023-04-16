<?php
include("../php/conexion.php");

if(isset($_GET['id'])){
    $id = $_GET ['id'];
    $query = "DELETE FROM publicaciones WHERE id = $id";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("Query Failed");
    }
    $_SESSION['message'] = 'Publicación eliminada';
    $_SESSION['message_type'] = 'danger';

    header("Location: ../publicaciones.php");
}
?>
