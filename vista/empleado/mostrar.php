<?php
require_once ('../../vista/componentes/header.php');
?>

<table border="1" class="table ">
    <thead class="table-secondary">
        <th>N°</th>
        <th>CARGO</th>
        <th>CI</th>
        <th>NOMBRE</th>
        <th>PATERNO</th>
        <th>MATERNO</th>
        <th>DIRECCION</th>
        <th>TELEFONO</th>
        <th>FECHA NAC.</th>
        <th>GENERO</th>
        <th colspan="2" class="text-center" >ACCIONES</th>
    </thead>
    <tbody>
        <?php
        if ($res->num_rows > 0) {
            $c=1;
            while ($row = $res->fetch_assoc()) {
                ?>
                <tr>
                    <td><?= $c ?></td>
                    <td><?= $row['cargo'] ?></td>
                    <td><?= $row['ci'] ?></td>
                    <td><?= $row['nombre'] ?></td>
                    <td><?= $row['paterno'] ?></td>
                    <td><?= $row['materno'] ?></td>
                    <td><?= $row['direccion'] ?></td>
                    <td><?= $row['telefono'] ?></td>
                    <td><?= $row['fechanacimiento'] ?></td>
                    <td><?= $row['genero'] ?></td>
                    <td>
                        <form class="eliminarForm" action="eliminar.php" method="POST">
                            <input type="text" name="id_empleado" value="<?= $row['id_empleado'] ?>" hidden>
                            <input class="btn btn-outline-danger" type="submit" value="ELIMINAR">
                        </form>
                    </td>
                    <td><a class="btn btn-outline-light" href="../../controlador/empleado/actualizar.php?cod=<?php echo $row['id_empleado'];?>">Modificar</a></td>

                </tr>
                <?php
                $c=$c+1;
            }
        }
        ?>
    </tbody>
</table>

<?php
require_once ('../../vista/componentes/footer.php');
?>

<script>
    // Captura el evento de envío de todos los formularios con clase "eliminarForm"
    document.querySelectorAll('.eliminarForm').forEach(form => {
        form.addEventListener('submit', function (event) {
            event.preventDefault(); // Evita que el formulario se envíe automáticamente

            // Obtén el valor del input "id_empleado" de este formulario específico
            const id_empleado = this.querySelector('input[name="id_empleado"]').value;

            // Muestra SweetAlert para confirmar la eliminación
            Swal.fire({
                title: '¿Estás seguro?',
                text: `Esta acción eliminará la plataforma con ID ${id_empleado}. ¿Deseas continuar?`,
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