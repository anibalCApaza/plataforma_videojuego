<?php
$cod=$_GET['cod'];
require_once __DIR__ . '/../../autoload.php';

use modelo\empleado;

use modelo\cargo;
$cargo=new Cargo();
$aux=$cargo->mostrar();

$empleado = new Empleado($cod,"","","","","","","","","","");
$res = $empleado->mostrarId();


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    require("../../vista/" . basename(dirname(__FILE__)) . "/actualizar.php");
} else {

    $empleadoo = new Empleado(
        $_POST['cod'],
        $_POST['cargo'],
        $_POST['ci'],
        $_POST['nombre'],
        $_POST['paterno'],
        $_POST['materno'],
        $_POST['direccion'],
        $_POST['telefono'],
        $_POST['fechanacimiento']
    );

    $tel = $empleadoo->modificar();

    if ($tel) {
        require("../../vista/" . basename(dirname(__FILE__)) . "/actualizar.php");

?>
        <script src="../../static/js/sweetalert2.all.min.js"></script>
        <script>
            Swal.fire({
                title: "ACTULIZACION EXITOSA",
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