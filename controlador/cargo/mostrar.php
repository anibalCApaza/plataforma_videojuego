<?php
require_once __DIR__ . '/../../autoload.php';

use modelo\cargo;

$cargo = new Cargo();

$res = $cargo->mostrar();




require("../../vista/" . basename(dirname(__FILE__)) . "/mostrar.php");
