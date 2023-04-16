<?php
include ("../php/conexion.php");
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $query = "select * from claveswifi where id =$id";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_array($result);
    $clave = $row['clave'];
    $password = $row['password'];
    $zona = $row['zona'];

  }
}
if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $clave = $_POST['clave'];
  $password = $_POST['password'];
  $zona = $_POST['zona'];

  $query = "UPDATE claveswifi set clave = '$clave', password = '$password' , zona = '$zona' WHERE id='$id'";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: ../claves.php');
}
?>
<?php include ("../navbar/header.php");?>

<div class = "container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
        <form action = "edit.php?id=<?php echo $_GET['id']; ?>" method = "post" >
          <div class="form-group">
            <input type = "text" name = "clave" value = "<?php echo $clave;?>" class = "form-control" placeholder = "Actualiza la clave">
          </div>
          <div class="form-group">
            <input type = "text" name = "password" value = "<?php echo $password;?>" class = "form-control" placeholder = "Actualiza la contraseña">
          </div>
          <div class="form-group">
            <input type = "text" name = "zona" value = "<?php echo $zona;?>" class = "form-control" placeholder = "Actualiza la zona">
          </div>
        <button class = "btn-success" name = update>
          update
        </button>
        </form>
      </div>
    </div>
  </div>
</div>

