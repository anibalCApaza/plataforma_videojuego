<?php
require_once __DIR__ . '/../../autoload.php';

use modelo\proveedor;

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    require("../../vista/" . basename(dirname(__FILE__)) . "/registrar.php");
} else {

    $proveedor = new Proveedor(
        "",
        $_POST['empresa'],
        $_POST['contacto'],
        $_POST['email'],
        $_POST['telefono'],
        $_POST['direccion'],
        $_FILES['logo']['name']
    );

    $ruta_logo = '../../static/imagenes/proveedor/';
    if (move_uploaded_file($_FILES['logo']['tmp_name'], $ruta_logo . basename($_FILES['logo']['name']))) {
        $res = $proveedor->registrar();
    } else {
        $res = null;
    }

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
