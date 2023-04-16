<?php
include ("../php/conexion.php");

if(isset($_POST['publicar'])){
    $fecha = date('Y-m-d H:i:s');
    $contenido = $_POST['contenido'];
    $imagen = $_FILES['imagen']['name'];
    $ruta = "./uploads/";

    if ($imagen != '') {
        $tipo = $_FILES['imagen']['type'];
        $tamano = $_FILES['imagen']['size'];
        $temp = $_FILES['imagen']['tmp_name'];
        $imagen = 'img_' . time() . '_' . $_FILES['imagen']['name'];
        move_uploaded_file($temp, $ruta . $imagen);
    } else {
        $imagen = null;
    }

    $query = "INSERT INTO publicaciones (fecha, contenido, imagen) VALUES ('$fecha', '$contenido', '$imagen')";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Publicación agregada satisfactoriamente';
    $_SESSION['message_type'] = 'success';

    header("Location: ../publicaciones.php");
}
?>
