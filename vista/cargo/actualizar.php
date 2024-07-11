<?php
require_once ('../../vista/componentes/header.php');
?>


<div class="col-6">
    <div class="card">


        <form action="" method="POST">

        <?php
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                ?>
            <div class="card-header bg-secondary text-center">
                MODIFICAR CARGO <br>
                <a class="btn btn-outline-light" href="../../controlador/cargo/mostrar.php">CANCELAR</a>
            </div>

            <input type="text" hidden name="cod" value="<?php echo $row['id_cargo'];?>">
            
            <div class="card-body">

                <div class="form-group">
                    <label for="">CARGO</label>
                    <input class="form-control" type="text" name="cargo" value="<?= $row['cargo'] ?>" required>
                </div>

            </div>
            <div class="card-footer ">
                <input class="btn btn-success w-100 btn-block " type="submit" value="MODIFICAR">

            </div>
            <?php
            }
        }
        ?>
        </form>
    </div>
</div>

<?php
require_once ('../../vista/componentes/footer.php');
?>