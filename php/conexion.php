<?php
$host = "localhost"; // El nombre del servidor de la base de datos (puede ser una dirección IP también)
$user = "root"; // El nombre de usuario de la base de datos
$password = ""; // La contraseña de la base de datos
$database = "logindb"; // El nombre de la base de datos que quieres conectar

// Crea la conexión a la base de datos
$conn = mysqli_connect($host, $user, $password, $database);

// Verifica si la conexión fue exitosa
/*if ($conn) {
    echo 'Conexion establecida';
}
echo '';
*/
?>
