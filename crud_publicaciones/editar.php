<?php
include ("../php/conexion.php");

// Verificar si se recibió un ID válido
if(isset($_GET['id']) && is_numeric($_GET['id'])){
  $id = $_GET['id'];
  
  // Consultar la publicación a editar
  $query = "SELECT * FROM publicaciones WHERE id=$id";
  $result = mysqli_query($conn, $query);

  if(mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_array($result);
    $contenido = $row['contenido'];
    $imagen = $row['imagen'];
  } else {
    // Si el ID no existe, redirigir a la página de publicaciones
    header('Location: ../publicaciones.php');
    exit();
  }
} else {
  // Si no se recibió un ID válido, redirigir a la página de publicaciones
  header('Location: ../publicaciones.php');
  exit();
}

// Actualizar la publicación
if (isset($_POST['actualizar'])) {
  $id = $_GET['id'];
  $contenido = $_POST['contenido'];

  // Verificar si se subió una imagen
  if(isset($_FILES['imagen']) && $_FILES['imagen']['error'] == UPLOAD_ERR_OK){
    $imagen = $_FILES['imagen']['name'];
    $ruta = $_FILES['imagen']['tmp_name'];
    $destino = "./uploads/" . $imagen;
    move_uploaded_file($ruta, $destino);
  }

  // Actualizar la publicación en la base de datos
  $query = "UPDATE publicaciones SET contenido='$contenido', imagen='$imagen' WHERE id=$id";
  mysqli_query($conn, $query);

  // Redirigir a la página de publicaciones
  header('Location: ../publicaciones.php');
  exit();
}
?>

<?php include ("../navbar/header.php");?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <div class="card card-body">
        <h4>Editar Publicación</h4>
        <form action="./editar.php?id=<?= $id ?>" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <textarea name="contenido" class="form-control mb-3" placeholder="Contenido"><?= $contenido ?></textarea>
          </div>
          <div class="form-group">
            <input type="file" name="imagen" class="form-control-file">
            <?php if ($imagen != '') { ?>
              <img src="./uploads/<?= $imagen ?>" alt="" class="img-fluid mt-3">
            <?php } ?>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-success btn-block" name="actualizar">Actualizar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

