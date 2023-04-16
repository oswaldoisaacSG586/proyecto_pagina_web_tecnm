<?php

ob_start();
include 'conexion.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];

// extraer el número de control a partir del correo institucional
if (preg_match('/^L(\d{8})@slp\.tecnm\.mx$/', $email, $matches)) {
    $numcontrol = $matches[1];
    // realizar la inserción en la base de datos con el número de control extraído
    $query = "INSERT INTO usuario (nombre,correo,num_control,password) values ('$nombre','$email','$numcontrol','$password')";
    //Verificar que el correo no se repita en la base de datos
    
    $verificar_correo = mysqli_query($conn, "select * from usuario where correo = '$email'");
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
        <script>
        alert("Este correo ya está en uso, intenta con otro diferente");
        window.location = "../loginRegister.php";
        </script>
        ';
        exit();
    }

    //Verificar que el nombre no se repita en la base de datos
    
    $verificar_nombre = mysqli_query($conn, "select * from usuario where nombre = '$nombre'");
    if(mysqli_num_rows($verificar_nombre) > 0){
        echo '
        <script>
        alert("Ya hay un usuario con este nombre, intenta nuevamente");
        window.location = "../loginRegister.php";
        </script>
        ';
        exit();
    }
    $ejecutar = mysqli_query($conn,$query);
    if ($ejecutar) {
        header("location: ../index.php");
        exit();
    } else {
        echo '<script>alert("Usuario no registrado")<script/>';
    }
} 

ob_end_flush();

?>
