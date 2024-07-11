<?php

require_once __DIR__ . '/../../autoload.php';

use modelo\cargo;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cargo = new cargo($_POST['id_cargo']);

    $res = $cargo->eliminar();

    header("Location: mostrar.php");
}
