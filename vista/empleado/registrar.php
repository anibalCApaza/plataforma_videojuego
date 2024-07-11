<?php
require_once ('../../vista/componentes/header.php');
?>


<div class="col-6">
    <div class="card">


        <form action="" method="POST">


            <div class="card-header bg-secondary">
                REGISTRAR EMPLEADO
            </div>
            <div class="card-body">

                <div class="form-group">
                    <label for="">CARGO</label>
                    <select name="cargo" class="form-control">
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
                    <input class="form-control" type="text" name="ci" required>
                </div>

                <div class="form-group">
                    <label for="">NOMBRE</label>
                    <input class="form-control" type="text" name="nombre" required>
                </div>

                <div class="form-group">
                    <label for="">PATERNO</label>
                    <input class="form-control" type="text" name="paterno" required>
                </div>

                <div class="form-group">
                    <label for="">MATERNO</label>
                    <input class="form-control" type="text" name="materno" required>
                </div>

                <div class="form-group">
                    <label for="">DIRECCION</label>
                    <input class="form-control" type="text" name="direccion" required>
                </div>

                <div class="form-group">
                    <label for="">TELEFONO</label>
                    <input class="form-control" type="text" name="telefono" required>
                </div>

                <div class="form-group">
                    <label for="">FECHA DE NACIMIENTO</label>
                    <input class="form-control" type="date" name="fechanacimiento" required>
                </div>

                <div class="form-group">
                    <label for="">GENERO:</label>&nbsp; &nbsp; &nbsp; &nbsp; 
                    <input type="radio" name="genero" id="genero" value="F">Femenino &nbsp; &nbsp; &nbsp; &nbsp; 
                    <input type="radio" name="genero" id="genero" value="M">Masculino <br>
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