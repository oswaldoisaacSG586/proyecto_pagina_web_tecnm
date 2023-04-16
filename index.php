<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/img/logoItslp.png">
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <form>
        <div class="form-group">
            <label for="mensaje">Mensaje:</label>
            <textarea class="form-control" id="mensaje" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="archivo">Agregar archivo:</label>
            <input type="file" class="form-control-file" id="archivo">
        </div>
        <button type="submit" class="btn btn-primary">Publicar</button>
    </form>
    <hr>
    <!-- Publicación de muestra -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Título de la publicación</h5>
            <p class="card-text">Este es un ejemplo de publicación en Facebook con Bootstrap. Aquí se puede escribir un mensaje y agregar un archivo (imagen o video) antes de publicar.</p>
            <a href="#" class="card-link">Editar</a>
        </div>
    </div>
</div>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>