<?php
require_once __DIR__ . '/../../autoload.php';

use modelo\proveedor;

$proveedor = new Proveedor();

$res = $proveedor->mostrar();


require("../../vista/" . basename(dirname(__FILE__)) . "/mostrar.php");
