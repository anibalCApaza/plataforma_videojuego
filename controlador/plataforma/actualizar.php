<?php
require_once __DIR__ . '/../../autoload.php';

use modelo\plataforma;

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id_plataforma'])) {
    $plataforma = new Plataforma($_GET['id_plataforma']);
    $res = $plataforma->buscar();
    require("../../vista/" . basename(dirname(__FILE__)) . "/actualizar.php");
} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $res;
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $plataforma = new Plataforma(
            $_POST['id_plataforma'],
            $_POST['nombre'],
            $_POST['fecha_lanzamiento'],
            $_FILES['imagen']['name'],
            $_POST['empresa']
        );
        $ruta_imagen = '../../static/imagenes/plataforma/';
        if (move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_imagen . basename($_FILES['imagen']['name']))) {
            $res = $plataforma->actualizar_con_imagen();
        }
    } else {
        $plataforma = new Plataforma(
            $_POST['id_plataforma'],
            $_POST['nombre'],
            $_POST['fecha_lanzamiento'],
            '',
            $_POST['empresa']
        );
        $res = $plataforma->actualizar_sin_imagen();
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
