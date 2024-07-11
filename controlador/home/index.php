<?php

require_once __DIR__ . '/../../autoload.php';

use modelo\videojuego;

$videojuego = new Videojuego();

$res = $videojuego->mostrar();


require("../../vista/index.php");
