<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/img/logoItslp.png">
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Registro</title>
    <style>
        body {
            background-color: #59bdff;
            background: linear-gradient(to right, #E9F3F8, #318BFE);
        }

        .bg {
            background-image: url(img/escuela.jpg);
            background-position: center center;
            background-size: cover;
        }
    </style>
</head>

<body>
<div class="container w-75 bg-primary mt-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">
            </div>
            <div class="col bg-white p-5 rounded-end">
                <h2 class="fw-bold text-center py5">Bienvenido</h2>
                <!--Login-->
                <form action="php/registro_usuario.php" method = "POST">
                <div class="mb-4">
                        <label for="text" class="form-label" >Nombre</label>
                        <input type="text" class="form-control" required pattern="[a-zA-Z ]+" name="nombre" title = "como lo son letras ">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label">Correo</label>
                        <input type="email" class="form-control" required pattern = "^L(\d{8})@slp\.tecnm\.mx$" name="email" title = ":LXXXXXXXX@slp.tecnm.mx">
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" required pattern = "^(?=.*\d)(?=.*[A-Z])(?!.*[^a-zA-Z0-9]).{8,16}$" name="password" title = ".Al menos una letra mayuscula y un número">

                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Registrarse</button>
                    </div>
                    <div class="my-3">
                    </div>
                </form>
                    <span>
                            <a href="login.php">Volver a inicio de sesión</a>
                    </span>
            </div>
        </div>
    </div>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>