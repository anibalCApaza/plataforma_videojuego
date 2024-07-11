<?php
require_once('../../vista/componentes/header.php');
?>

<div class="col-6">
    <div class="card">
        <?php
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
        ?>
                <form method="POST" enctype="multipart/form-data">
                    <div class="card-header bg-warning">
                        MODIFICAR PROVEEDOR
                    </div>
                    <div class="card-body">
                        <div>
                            <input type="text" name="id_proveedor" value="<?= $row['id_proveedor'] ?>" readonly hidden>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">EMPRESA</label>
                                    <input class="form-control" type="text" name="empresa" value="<?= $row['empresa'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">CONTACTO</label>
                                    <input class="form-control" type="text" name="contacto" value="<?= $row['contacto'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">EMAIL</label>
                                    <input class="form-control" type="email" name="email" value="<?= $row['email'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">TELÉFONO</label>
                                    <input class="form-control" type="text" name="telefono" value="<?= $row['telefono'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">DIRECCIÓN</label>
                                    <input class="form-control" type="text" name="direccion" value="<?= $row['direccion'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">LOGO</label>
                                    <div class="d-flex justify-content-center m-2">
                                        <img src="../../static/imagenes/proveedor/<?= $row['logo'] ?>" width="150px" alt="">
                                    </div>
                                    <input class="form-control" type="file" name="logo">
                                    <small class="form-text text-muted">No adicionar archivo en caso de no querer cambiar el logo.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input class="btn btn-warning btn-block w-100" type="submit" value="MODIFICAR">
                    </div>
                </form>
        <?php
            }
        }
        ?>
    </div>
</div>

<?php
require_once('../../vista/componentes/footer.php');
?>
