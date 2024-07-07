<?php
require_once('../../vista/componentes/header.php');
?>

<table border="1" class="table">
    <thead class="table-secondary">
        <th>EMPRESA</th>
        <th>CONTACTO</th>
        <th>EMAIL @</th>
        <th>TELEFONO</th>
        <th>DIRECCION</th>
        <th>LOGO</th>
    </thead>

    <tbody>
        <?php
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
        ?>
                <tr>
                    <td><?= $row['empresa'] ?></td>
                    <td><?= $row['contacto'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['telefono'] ?></td>
                    <td><?= $row['direccion'] ?></td>
                    <td><img src="../controlador/imagenesproveedor/<?php echo $row['logo']; ?>" alt="" width="40px" height="35px"></td>

                    <td>
                        <form class="eliminarForm" action="eliminar.php" method="POST">
                            <input type="text" name="id_plataforma" value="<?= $row['id_proveedor'] ?>" hidden>
                            <input class="btn btn-danger" type="submit" value="ELIMINAR">
                        </form>
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