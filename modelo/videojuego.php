<?php

namespace modelo;

class Videojuego
{
    public function __construct(
        private $id_videojuego = '',
        private $id_proveedor = '',
        private $titulo = '',
        private $empresa = '',
        private $clasificacion = '',
        private $imagen = '',
        private $genero = '',
        private $video = '',
    ) {
    }

    public function mostrar()
    {
        $db = new Conexion();
        $sql = $db->query("SELECT videojuego.*, proveedor.empresa as 'nombre_proveedor' FROM videojuego INNER JOIN proveedor ON videojuego.id_proveedor = proveedor.id_proveedor;");
        return $sql;
    }
}
