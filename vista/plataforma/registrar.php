<?php
require_once('../../vista/componentes/header.php');
?>


<div class="col-6">
    <div class="card">


        <form action="" method="POST" enctype="multipart/form-data">


            <div class="card-header bg-secondary">
                REGISTRAR PLATAFORMA
            </div>
            <div class="card-body">

                <div class="form-group">
                    <label for="">NOMBRE</label>
                    <input class="form-control" type="text" name="nombre" required>
                </div>


                <div class="form-group">
                    <label for="">FECHA LANZAMIENTO</label>
                    <input class="form-control" type="date" name="fecha_lanzamiento" required>
                </div>

                <div class="form-group">
                    <label for="">IMAGEN</label>
                    <input class="form-control" type="file" name="imagen" required>
                </div>

                <div class="form-group">

                    <label for="">EMPRESA</label>
                    <input class="form-control" type="text" name="empresa" required>
                </div>

            </div>
            <div class="card-footer ">
                <input class="btn btn-success w-100 btn-block " type="submit" value="REGISTRAR">

            </div>
        </form>
    </div>
</div>

<?php
require_once('../../vista/componentes/footer.php');
?>