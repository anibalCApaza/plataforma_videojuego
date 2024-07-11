<?php
require_once ('../../vista/componentes/header.php');
?>

<table border="1" class="table">
    <thead class="table-secondary">
        <th>N°</th>
        <th>CARGO</th>
        <th colspan="2">ACCIONES</th>
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
                    <td>
                        <form class="eliminarForm" action="eliminar.php" method="POST">
                            <input type="text" name="id_cargo" value="<?= $row['id_cargo'] ?>" hidden>
                            <input class="btn btn-outline-danger" type="submit" value="ELIMINAR">
                        </form>
                    </td>
                    <td><a class="btn btn-outline-light" href="../../controlador/cargo/actualizar.php?cod=<?php echo $row['id_cargo'];?>">Modificar</a></td>

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

            // Obtén el valor del input "id_cargo" de este formulario específico
            const id_cargo = this.querySelector('input[name="id_cargo"]').value;

            // Muestra SweetAlert para confirmar la eliminación
            Swal.fire({
                title: '¿Estás seguro?',
                text: `Esta acción eliminará la plataforma con ID ${id_cargo}. ¿Deseas continuar?`,
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