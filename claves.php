<?php
    include("./php/conexion.php");
?>
<?php include ("./navbar/header.php");?>
<main class = "container p-2 m-3">
    <div class="row">
        <div class="col-md-4">
            <!--Message-->
          <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message']?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
          <?php session_unset(); } ?>

            <!--Espacio para agregar nuevas claves-->

            <div class="card cad-body">
                <form action = "./php_crud/save_task.php" method = "post" >
                    <div class="form-group m-2">
                        <input type = "text"  class = "form-control" placeholder="Clave..." required name ="clave" autofocus >
                    </div>
                    <div class="form-group m-2" >
                        <input type = "text"  class = "form-control" placeholder="Contraseña..." required name= "password" autofocus  >
                    </div>
                    <div class="form-group m-2">
                        <input type = "text" class = "form-control" placeholder="Zona..." required name = "zona"  autofocus >
                    </div> 
                    <div style="display: flex; justify-content: center;">
                    <input type = "submit" class = "btn btn-success d-flex " name = "save_clave" value = "Guardar"  >
                    </div>
                </form>
            </div>
        </div>
        <!--Fin del agregar claves-->
        <!--Inicio tabla-->
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Claves</th>
                        <th>Contraseña</th>
                        <th>Zona</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "select * from claveswifi";
                        $result_claves = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_assoc($result_claves)){?>
                        <tr>
                            <td><?php echo $row['clave']?></td>
                            <td> <?php echo $row['password']?></td>
                            <td> <?php echo $row['zona']?></td>
                            <td>
                                <a href = "./php_crud/edit.php?id=<?php echo $row['id']?>" class = "btn btn-secondary">
                                    <i class = "fas fa-marker"></i>
                                </a>
                                <a href = "./php_crud/delete_task.php?id=<?php echo $row['id']?>" class = "btn btn-danger">
                                    <i class = "fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php include ("./navbar/footer.php");?>
