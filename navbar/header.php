<?php
session_start();
if(!isset($_SESSION['usuario'])){

    echo '
    <script>
        alert("Inicia sesión para acceder a la página principal");
        windows.location = "./login.php";
    </script>';
    header("location: ./login.php");
    session_destroy();
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/img/logoItslp.png">
    <link rel= "stylesheet" type = "text/css"href = "./cssStyles/footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Inicio</title>
    <style>
         .bg {
            background-color: rgb(0, 110, 255);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg" id="navbar">
        <div class="container-fluid">
            
            <a class="navbar-brand" href="https://slp.tecnm.mx/" target = "_blank" >
                <img src="img/logotec.png" alt="" width="50">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link " aria-current="page" href="./publicaciones.php">Eventos</a></li>
                    <li class="nav-item"><a class="nav-link" href="./claves.php">Claves Wi-Fi</a></li>
                    <li class="nav-item"><a class="nav-link" href="./asistencia.php">Asistencia</a></li>
                    <li>
                        <a class="nav-item"><a class="nav-link" href="php/controlador_sign_out.php">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  
    