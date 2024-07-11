<?php

namespace modelo;

class Cargo
{

    public function __construct(
        private $id_cargo = "",
        private $cargo = ""
    ) {
    }

    public function mostrar()
    {
        $db = new Conexion();
        $sql = $db->query("SELECT * FROM cargo");
        return $sql;
    }

    public function registrar()
    {
        $db = new Conexion();
        $sql = $db->query("INSERT INTO cargo (cargo) 
                            VALUES ('$this->cargo')");
        return $sql;
    }

    public function eliminar()
    {
        $db = new Conexion();
        $sql = $db->query("DELETE FROM cargo WHERE id_cargo = '$this->id_cargo'");
        return $sql;
    }

    public function mostrarId()
    {
        $db = new Conexion();
        $sql = $db->query("SELECT * FROM cargo WHERE id_cargo = '$this->id_cargo'");
        return $sql;
    }

    public function modificar()
    {
        $db = new Conexion();
        $sql = $db->query("UPDATE cargo SET cargo ='$this->cargo' WHERE id_cargo='$this->id_cargo'");
        return $sql;
    }
}
