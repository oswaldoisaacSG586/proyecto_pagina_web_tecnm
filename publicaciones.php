<?php include("./php/conexion.php"); ?>
<?php include ("./navbar/header.php");?>
<main class="container p-3 m-3">
    <div class="row">
        <!-- Columna para publicación -->
        <div class="col-md-3">
            <div class="card card-body mb-3">
                <h4 class="mb-3">Nueva Publicación</h4>
                <form action="./crud_publicaciones/publicar.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <textarea name="contenido" class="form-control mb-3" placeholder="Contenido"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="file" name="imagen" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block" name="publicar">Publicar</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Columna para lista de publicaciones -->
        <div class="col-md-9">
    <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php session_unset(); } ?>

    <h4 class="mb-3">Publicaciones</h4>

    <?php
    $query = "SELECT * FROM publicaciones ORDER BY fecha DESC";
    $result_publicaciones = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($result_publicaciones)) { ?>
        <div class="card card-body mb-4">
            <h5 class="card-title"><?= date('d-m-Y', strtotime($row['fecha'])) ?></h5>
            <p class="card-text"><?= $row['contenido'] ?></p>
            <?php if ($row['imagen'] != '') { ?>
                <img src="./uploads/<?= $row['imagen'] ?>" alt="" class="img-fluid mb-3">
            <?php } ?>
            <div class="card-footer">
                <a href="./crud_publicaciones/editar.php?id=<?= $row['id'] ?>" class="btn btn-primary">Editar</a>
                <a href="./crud_publicaciones/eliminar.php?id=<?= $row['id'] ?>" class="btn btn-danger">Eliminar</a>
                
            </div>
            
        </div>
    <?php } ?>
</div>

</main>

<?php include ("./navbar/footer.php");?>
