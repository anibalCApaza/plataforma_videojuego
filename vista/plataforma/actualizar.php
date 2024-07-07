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
                        MODIFICAR PLATAFORMA
                    </div>
                    <div class="card-body">
                        <div>
                            <input type="text" name="id_plataforma" value="<?= $row['id_plataforma'] ?>" readonly hidden>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">NOMBRE</label>
                                    <input class="form-control" type="text" name="nombre" value="<?= $row['nombre'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">FECHA DE LANZAMIENTO</label>
                                    <input class="form-control" type="date" name="fecha_lanzamiento" value="<?= $row['fecha_lanzamiento'] ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">EMPRESA</label>
                                    <input class="form-control" type="text" name="empresa" value="<?= $row['empresa'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">IMAGEN</label>
                                    <div class="d-flex justify-content-center m-2">
                                        <img src="../../static/imagenes/plataforma/<?= $row['imagen'] ?>" width="150px" alt="">
                                    </div>
                                    <input class="form-control" type="file" name="imagen">
                                    <small class="form-text text-muted">No adicionar archivo en caso de no querer cambiar la imagen.</small>
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