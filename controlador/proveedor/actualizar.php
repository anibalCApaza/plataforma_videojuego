<?php
require_once __DIR__ . '/../../autoload.php';

use modelo\proveedor;

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id_proveedor'])) {
    $proveedor = new Proveedor($_GET['id_proveedor']);
    $res = $proveedor->buscar();
    require("../../vista/" . basename(dirname(__FILE__)) . "/actualizar.php");
} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $res;
    if (isset($_FILES['logo']) && $_FILES['logo']['error'] === UPLOAD_ERR_OK) {
        $proveedor = new Proveedor(
            $_POST['id_proveedor'],
            $_POST['empresa'],
            $_POST['contacto'],
            $_POST['email'],
            $_POST['telefono'],
            $_POST['direccion'],
            $_FILES['logo']['name']
        );
        $ruta_logo = '../../static/imagenes/proveedor/';
        if (move_uploaded_file($_FILES['logo']['tmp_name'], $ruta_logo . basename($_FILES['logo']['name']))) {
            $res = $proveedor->actualizar_con_logo();
        }
    } else {
        $proveedor = new Proveedor(
            $_POST['id_proveedor'],
            $_POST['empresa'],
            $_POST['contacto'],
            $_POST['email'],
            $_POST['telefono'],
            $_POST['direccion'],
            ''
        );
        $res = $proveedor->actualizar_sin_logo();
    }

    if ($res) {
        require("../../vista/index.php");
?>
        <script src="../../static/js/sweetalert2.all.min.js"></script>
        <script>
            Swal.fire({
                title: "MODIFICACIÓN EXITOSA",
                icon: "success"
            }).then(() => {
                location.href = 'mostrar.php'; // Redirigir a la página de mostrar.php
            });
        </script>
<?php
    }
}
?>
