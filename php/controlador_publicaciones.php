<?php
// Incluir archivo de conexión a la base de datos
include('conexion.php');

// Recuperar los datos del formulario
$contenido = $_POST['contenido'];
$imagen = $_FILES['imagen']['tmp_name'];
$fecha = date('Y-m-d H:i:s');

// Leer la imagen en una variable
$imagen_bin = null;
if ($imagen) {
  $imagen_bin = file_get_contents($imagen);
}

// Preparar la consulta SQL
$sql = "INSERT INTO publicaciones (contenido, imagen, fecha) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

// Verificar si la consulta SQL fue preparada correctamente
if (!$stmt) {
  die('Error al preparar la consulta SQL: ' . $conn->error);
}

// Asociar los parámetros con los valores
$stmt->bind_param("sss", $contenido, $imagen, $fecha);

// Ejecutar la consulta SQL
if ($stmt->execute()) {
  // Redireccionar a la página de inicio si la consulta se ejecutó correctamente
  header("location: publicaciones.php");
} else {
  // Mostrar un mensaje de error si la consulta falló
  echo 'Error al ejecutar la consulta SQL: ' . $stmt->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
