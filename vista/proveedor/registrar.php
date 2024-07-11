<?php
require_once('../../vista/componentes/header.php');
?>

<div class="col-6">
    <div class="card">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="card-header bg-secondary">
                REGISTRAR PROVEEDOR
            </div>
            <div class="card-body">

                <div class="form-group">
                    <label for="">EMPRESA</label>
                    <input class="form-control" type="text" name="empresa" required>
                </div>

                <div class="form-group">
                    <label for="">CONTACTO</label>
                    <input class="form-control" type="text" name="contacto" required>
                </div>

                <div class="form-group">
                    <label for="">EMAIL</label>
                    <input class="form-control" type="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="">TELÉFONO</label>
                    <input class="form-control" type="text" name="telefono" required>
                </div>

                <div class="form-group">
                    <label for="">DIRECCIÓN</label>
                    <input class="form-control" type="text" name="direccion" required>
                </div>

                <div class="form-group">
                    <label for="">LOGO</label>
                    <input class="form-control" type="file" name="logo" required>
                </div>

            </div>
            <div class="card-footer">
                <input class="btn btn-success w-100 btn-block" type="submit" value="REGISTRAR">
            </div>
        </form>
    </div>
</div>

<?php
require_once('../../vista/componentes/footer.php');
?>
