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
                MODIFICAR EMPLEADO <br>
                <a class="btn btn-outline-light" href="../../controlador/empleado/mostrar.php">CANCELAR</a>
            </div>
            
            <div class="card-body">
                
            <input type="text" hidden name="cod" value="<?php echo $row['id_empleado'];?>">
            
                <div class="form-group">
                    <label for="">CARGO</label>
                    <select name="cargo" class="form-control">
                    <option value="<?php echo $row['id_cargo']; ?>">
                        <?php echo $row['cargo']; ?>
                    </option>
                        <?php
                            while($reg=mysqli_fetch_array($aux)){
                        ?>
                        <option style="background-color: black;" value="<?php echo $reg['id_cargo'];?>">
                        <?php echo $reg['cargo']." ";?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>


                <div class="form-group">
                    <label for="">C.I.</label>
                    <input class="form-control" type="text" name="ci" value="<?= $row['ci'] ?>" required>
                </div>

                <div class="form-group">
                    <label for="">NOMBRE</label>
                    <input class="form-control" type="text" name="nombre" value="<?= $row['nombre'] ?>" required>
                </div>

                <div class="form-group">
                    <label for="">PATERNO</label>
                    <input class="form-control" type="text" name="paterno" value="<?= $row['paterno'] ?>" required>
                </div>

                <div class="form-group">
                    <label for="">MATERNO</label>
                    <input class="form-control" type="text" name="materno" value="<?= $row['materno'] ?>" required>
                </div>

                <div class="form-group">
                    <label for="">DIRECCION</label>
                    <input class="form-control" type="text" name="direccion" value="<?= $row['direccion'] ?>" required>
                </div>

                <div class="form-group">
                    <label for="">TELEFONO</label>
                    <input class="form-control" type="text" name="telefono" value="<?= $row['telefono'] ?>" required>
                </div>

                <div class="form-group">
                    <label for="">FECHA DE NACIMIENTO</label>
                    <input class="form-control" type="date" name="fechanacimiento" value="<?= $row['fechanacimiento'] ?>" required>
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