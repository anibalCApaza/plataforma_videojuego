<!DOCTYPE html>
<html lang="en" data-bs-target="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../static/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../static/css/bootstrap-icons.min.css" rel="stylesheet">
    <script src="../../static/js/bootstrap.min.js"></script>
    <script src="../../static/js/sweetalert2.all.min.js"></script>
</head>

<body>
    <!-- Encabezado o navbar -->
    <div class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container">
            <img src="../../static/imagenes/logoLllama.png" width="55px" alt="">
            <h2 class="navbar-brand">Pixeles Andinos </h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse show" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown" data-bs-theme="light">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="themes" aria-expanded="false">Empleados</a>
                        <div class="dropdown-menu" aria-labelledby="themes">
                            <a class="dropdown-item" href="../../controlador/empleado/registrar.php">Registrar</a>
                            <a class="dropdown-item" href="../../controlador/empleado/mostrar.php">Listar</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown" data-bs-theme="light">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="themes" aria-expanded="false">Cargo</a>
                        <div class="dropdown-menu" aria-labelledby="themes">
                            <a class="dropdown-item" href="../../controlador/cargo/registrar.php">Registrar</a>
                            <a class="dropdown-item" href="../../controlador/cargo/mostrar.php">Listar</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown" data-bs-theme="light">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="themes" aria-expanded="false">Video Juegos</a>
                        <div class="dropdown-menu" aria-labelledby="themes">
                            <a class="dropdown-item" href="../../controlador/videojuego/registrar.php">Registrar</a>
                            <a class="dropdown-item" href="../../controlador/videojuego/mostrar.php">Listar</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown" data-bs-theme="light">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="themes" aria-expanded="false">Proveedor</a>
                        <div class="dropdown-menu" aria-labelledby="themes">
                            <a class="dropdown-item" href="../../controlador/proveedor/registrar.php">Registrar</a>
                            <a class="dropdown-item" href="../../controlador/proveedor/mostrar.php">Listar</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown" data-bs-theme="light">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="themes" aria-expanded="false">Plataforma</a>
                        <div class="dropdown-menu" aria-labelledby="themes">
                            <a class="dropdown-item" href="../../controlador/plataforma/registrar.php">Registrar</a>
                            <a class="dropdown-item" href="../../controlador/plataforma/mostrar.php">Listar</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Cuerpo o body -->
    <div class="container d-flex justify-content-center p-4">