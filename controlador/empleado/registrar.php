<?php
require_once __DIR__ . '/../../autoload.php';

use modelo\empleado;
use modelo\cargo;
$cargo=new Cargo();
$aux=$cargo->mostrar();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    require("../../vista/" . basename(dirname(__FILE__)) . "/registrar.php");
} else {

    $empleado = new Empleado(
        "",
        $_POST['cargo'],
        $_POST['ci'],
        $_POST['nombre'],
        $_POST['paterno'],
        $_POST['materno'],
        $_POST['direccion'],
        $_POST['telefono'],
        $_POST['fechanacimiento'],
        $_POST['genero'],
        $_POST['estado']=1
    );

    $res = $empleado->registrar();

    if ($res) {
        require("../../vista/" . basename(dirname(__FILE__)) . "/registrar.php");

?>
        <script src="../../static/js/sweetalert2.all.min.js"></script>
        <script>
            Swal.fire({
                title: "REGISTRO EXITOSO",
                text: "Se realizó el registro exitosamente",
                icon: "success"
            }).then(() => {
                location.href = 'mostrar.php'; // Redirigir a la página de mostrar.php
            });
        </script>

<?php
    }
}
?>