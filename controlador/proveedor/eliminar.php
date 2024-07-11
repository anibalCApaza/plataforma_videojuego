<?php

require_once __DIR__ . '/../../autoload.php';

use modelo\proveedor;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $proveedor = new Proveedor($_POST['id_proveedor']);

    $res = $proveedor->eliminar();

    header("Location: mostrar.php");
}
?>
