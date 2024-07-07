<?php

namespace modelo;

class Proveedor
{
    public function __construct(
        private $id_proveedor = "",
        private $empresa = "",
        private $contacto = "",
        private $email = "",
        private $telefono = "",
        private $direccion = "",
        private $logo = ""
    ) {
    }

    public function mostrar()
    {
        $db = new Conexion();
        $sql = $db->query("SELECT * FROM proveedor");
        return $sql;
    }

    public function registrar()
    {
        $db = new Conexion();
        $sql = $db->query("INSERT INTO proveedor (empresa, contacto, email,telefono,direccion,logo ) 
                            VALUES ('$this->empresa','$this->contacto', '$this->email', '$this->telefono','$this->direccion','$this->logo')");
        return $sql;
    }

    public function eliminar()
    {
        $db = new Conexion();
        $sql = $db->query("DELETE FROM proveedor WHERE id_plataforma = '$this->id_proveedor'");
        return $sql;
    }

    public function buscar($busca)
    {
        include("conexion.php");
        $db = new Conexion();
        $sql = $db->query("SELECT * FROM proveedor WHERE id_proveedor=$this->id_proveedor");
        return ($sql);
    }
}
