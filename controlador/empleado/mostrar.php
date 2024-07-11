<?php
require_once __DIR__ . '/../../autoload.php';

use modelo\empleado;

$empleado = new Empleado();

$res = $empleado->mostrar();




require("../../vista/" . basename(dirname(__FILE__)) . "/mostrar.php");