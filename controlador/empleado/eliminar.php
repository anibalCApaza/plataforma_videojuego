<?php

require_once __DIR__ . '/../../autoload.php';

use modelo\empleado;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $empleado = new Empleado($_POST['id_empleado']);

    $res = $empleado->eliminar();

    header("Location: mostrar.php");
}
