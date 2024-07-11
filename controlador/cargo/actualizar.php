<?php
$cod=$_GET['cod'];
require_once __DIR__ . '/../../autoload.php';

use modelo\cargo;
$cargo = new Cargo($cod,"");
$res = $cargo->mostrarId();


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    require("../../vista/" . basename(dirname(__FILE__)) . "/actualizar.php");
} else {

    $cargo = new Cargo(
        $_POST['cod'],
        $_POST['cargo']
    );

    $tel = $cargo->modificar();

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