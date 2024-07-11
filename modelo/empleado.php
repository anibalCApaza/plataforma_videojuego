<?php

namespace modelo;

class Empleado
{

    public function __construct(
        private $id_empleado = "",
        private $id_cargo = "",
        private $ci = "",
        private $nombre = "",
        private $paterno = "",
        private $materno = "",
        private $direccion = "",
        private $telefono = "",
        private $fechanacimiento = "",
        private $genero = "",
        private $estado = ""
    ) {
    }

    public function mostrar()
    {
        $db = new Conexion();
        $sql = $db->query("SELECT e.*, c.cargo FROM empleado e INNER JOIN cargo c ON e.id_cargo=c.id_cargo WHERE e.estado=1");
        return $sql;
    }

    public function mostrarId()
    {
        $db = new Conexion();
        $sql = $db->query("SELECT e.*,c.* FROM empleado e INNER JOIN cargo c ON e.id_cargo=c.id_cargo WHERE id_empleado = '$this->id_empleado'");
        return $sql;
    }

    public function registrar()
    {
        $db = new Conexion();
        $sql = $db->query("INSERT INTO empleado (id_cargo, ci, nombre, paterno, materno, direccion, telefono, fechanacimiento, genero, estado) 
                            VALUES ('$this->id_cargo','$this->ci','$this->nombre','$this->paterno', '$this->materno', '$this->direccion', '$this->telefono', '$this->fechanacimiento', '$this->genero', '$this->estado')");
        return $sql;
    }

    public function eliminar()
    {
        $db = new Conexion();
        $sql = $db->query("DELETE FROM empleado WHERE id_empleado = '$this->id_empleado'");
        return $sql;
    }

    public function modificar()
    {
        $db = new Conexion();
        $sql = $db->query("UPDATE empleado SET id_cargo ='$this->id_cargo', ci ='$this->ci', nombre ='$this->nombre', paterno ='$this->paterno', materno ='$this->materno', direccion ='$this->direccion', telefono ='$this->telefono', fechanacimiento ='$this->fechanacimiento' WHERE id_empleado='$this->id_empleado'");
        return $sql;
    }
}
