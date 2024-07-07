<?php
require_once __DIR__ . '/../../autoload.php';

use modelo\plataforma;

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    require("../../vista/" . basename(dirname(__FILE__)) . "/registrar.php");
} else {

    $plataforma = new Plataforma(
        "",
        $_POST['nombre'],
        $_POST['fecha_lanzamiento'],
        $_FILES['imagen']['name'],
        $_POST['empresa'],
    );

    $ruta_imagen = '../../static/imagenes/plataforma/';
    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_imagen . basename($_FILES['imagen']['name']))) {
        $res = $plataforma->registrar();
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