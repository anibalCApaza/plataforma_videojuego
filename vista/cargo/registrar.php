<?php
require_once ('../../vista/componentes/header.php');
?>


<div class="col-6">
    <div class="card">


        <form action="" method="POST">


            <div class="card-header bg-secondary">
                REGISTRAR CARGO
            </div>
            <div class="card-body">

                <div class="form-group">
                    <label for="">CARGO</label>
                    <input class="form-control" type="text" name="cargo" required>
                </div>

            </div>
            <div class="card-footer ">
                <input class="btn btn-success w-100 btn-block " type="submit" value="REGISTRAR">

            </div>
        </form>
    </div>
</div>

<?php
require_once ('../../vista/componentes/footer.php');
?>