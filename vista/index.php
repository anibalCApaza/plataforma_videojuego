<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PGC-GYM Landing Page</title>
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
    <link rel="stylesheet" href="../../static/css/style.css" />
    <link rel="stylesheet" href="../../static/css/bootstrap.min.css">
</head>

<body>
    <!-- Menu -->
    <div class="menu">
        <div class="container flex">
            <div class="mobile-btn">
                <ion-icon name="grid"></ion-icon>
            </div>
            <div class="logo">
                <img src="../../static/imagenes/index/logoLllama.png" alt="" />
            </div>
            <ul class="nav">
                <li class="nav-item"><a href="#">Contactos</a></li>
                <li class="nav-item"><a href="#">Acerda de</a></li>
                <li class="nav-item"><a href="#">Panel A.</a></li>
                <li class="nav-item"><a href="#">Productos</a></li>
            </ul>
            <a href="#" class="btn">Iniciar Sesion</a>
        </div>
    </div>
    <!-- Final Menu -->
    <!-- Header -->
    <header class="header">
        <div class="container flex">
            <div class="text">
                <h1 class="mb">
                    Los Mejores Juegos<br />
                    <span>Arcade</span> de la Ciudad
                </h1>
                <p class="mb" style="color: black;">
                    Los videojuegos son más que un pasatiempo, son una forma de expresarse, crear y conectar con los demás.
                    Descubre un universo de posibilidades en nuestra tienda, donde encontrarás los últimos lanzamientos, clásicos atemporales y todo lo que necesitas para tu experiencia gamer.
                </p>
                <a href="#" class="btn mt">Un paraíso para los gamers</a>
            </div>
            <div class="visual">
                <img src="../../static/imagenes/index/perfilnuevo2.png" />
            </div>
        </div>
    </header>
    <!-- Final Header -->
    <div class="section" id="why-us">
        <h1 style="text-align: center;">Juegos mas populares</h1>
        <div class="container flex">
            <div class="cinta">
                <div class="pollo" style="background-image: url('../../static/imagenes/index/juegp.jpg');
                background-repeat: no-repeat;
                background-size: 100% 100%;">
                    <p class="letra">God Of War<br>Ragnarok<br>Xbox y Play5</p>
                </div>

                <div class="pollo" style="background-image: url('../../static/imagenes/index/juego1.jpg');
                background-repeat: no-repeat;
                background-size: 100% 100%;">
                    <p class="letra">Spider Man 2<br>Play5</p>
                </div>

                <div class="pollo" style="background-image: url('../../static/imagenes/index/juego2.jpg');
                background-repeat: no-repeat;
                background-size: 100% 100%;">
                    <p class="letra">Elden Ring<br>Shadow of<br>the Erdtree<br>Xbox y Play5</p>
                </div>
                <div class="pollo" style="background-image: url('../../static/imagenes/index/juego3.jpg');
                background-repeat: no-repeat;
                background-size: 100% 100%;">
                    <p class="letra">EA Sports FC™ 24<br>Xbox</p>
                </div>
                <div class="pollo" style="background-image: url('../../static/imagenes/index/juego4.jpg');
                background-repeat: no-repeat;
                background-size: 100% 100%;">
                    <p class="letra">Resident Evil 4<br>Xbox y Play5</p>
                </div>
                <div class="pollo" style="background-image: url('../../static/imagenes/index/juego5.jpg');
                background-repeat: no-repeat;
                background-size: 100% 100%;">
                    <p class="letra">Call Of Duty<br>Blank Ops 6<br>Xbox</p>
                </div>
                <div class="pollo" style="background-image: url('../../static/imagenes/index/juego6.jpg');
                background-repeat: no-repeat;
                background-size: 100% 100%;">
                    <p class="letra">Horizon<br>Forbidden West<br>Play4</p>
                </div>
            </div>
        </div>

        <div class="row" style="text-align: center;">
            <?php
            if ($res->num_rows != 0) {
                while ($row = $res->fetch_assoc()) {
            ?>
                    <div class="col-4">
                        <img class="image" src="../../static/imagenes/videojuego/<?= $row['imagen'] ?>" alt="">
                        <h4> <?= $row['titulo'] ?> </h4>
                    </div>

            <?php

                }
            }
            ?>
        </div>


    </div>


    <!-- Footer -->
    <footer class="footer">
        <div class="container flex">
            <p class="tertiary">
                &copy; 2024 PixelesAndinos, Mayk.
            </p>
        </div>
    </footer>
    <!-- final Footer -->
    <script src="../../static/js/mobile_menu.js"></script>
</body>

</html>