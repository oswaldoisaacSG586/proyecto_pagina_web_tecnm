<?php
session_start();

include 'conexion.php';

if(isset($_POST['email']) && isset($_POST['password'])) {
    // Las variables $_POST están definidas, lo que significa que se ha enviado el formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Validación del login
    $validar_login = mysqli_query($conn, "select * from usuario where correo = '$email' and password = '$password'");

    if(mysqli_num_rows($validar_login)>0){
        $_SESSION['usuario'] = $email;
        header("location: ../publicaciones.php");
        exit();
    }else{
        echo '
            <script>
                alert("Usuario no encontrado, por favor intente de nuevo");
                window.location = "../login.php";
            </script>
        ';
        exit();
    }
}
?>
