<?php
require_once('../../vista/componentes/header.php');
?>


<table border="1" class="table ">
    <thead class="table-secondary">
        <th>PROVEEDOR</th>
        <th>TÍTULO</th>
        <th>EMPRESA</th>
        <th>CLASIFICACIÓN</th>
        <th>IMAGEN</th>
        <th>GENERO</th>
        <th>VIDEO</th>
        <th>ACCIONES</th>
    </thead>
    <tbody>
        <?php
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
        ?>
                <tr>
                    <td><?= $row['nombre_proveedor'] ?></td>
                    <td><?= $row['titulo'] ?></td>
                    <td><?= $row['empresa'] ?></td>
                    <td><?= $row['clasificacion'] ?></td>
                    <td><img src="../../static/imagenes/videojuego/<?= $row['imagen'] ?>" width="100px" alt=""></td>
                    <td><?= $row['genero'] ?></td>
                    <td>
                        <iframe width="160" height="90" src="<?= $row['video'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>

                    </td>
                    <td>
                        <div class="row">
                            <div class="col">
                                <form action="actualizar.php" method="GET">
                                    <input type="text" name="id_plataforma" value="<?= $row['id_videojuego'] ?>" hidden>
                                    <input class="btn btn-warning btn-block w-100" type="submit" value="MODIFICAR">
                                </form>
                            </div>
                            <div class="col">

                                <form class="eliminarForm" action="eliminar.php" method="POST">
                                    <input type="text" name="id_plataforma" value="<?= $row['id_videojuego'] ?>" hidden>
                                    <input class="btn btn-danger btn-block w-100" type="submit" value="ELIMINAR">
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
        <?php

            }
        }
        ?>
    </tbody>
</table>

<?php
require_once('../../vista/componentes/footer.php');
?>

<script>
    // Captura el evento de envío de todos los formularios con clase "eliminarForm"
    document.querySelectorAll('.eliminarForm').forEach(form => {
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Evita que el formulario se envíe automáticamente

            // Obtén el valor del input "id_plataforma" de este formulario específico
            const id_plataforma = this.querySelector('input[name="id_plataforma"]').value;

            // Muestra SweetAlert para confirmar la eliminación
            Swal.fire({
                title: '¿Estás seguro?',
                text: `Esta acción eliminará la plataforma con ID ${id_plataforma}. ¿Deseas continuar?`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Si el usuario confirma, procede a enviar este formulario específico
                    form.submit();
                }
            });
        });
    });
</script>