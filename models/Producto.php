<?php
require_once __DIR__ . "/../config/conexion.php";

class Producto
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = obtenerConexion();
    }

    public function listar()
    {
        $consulta = $this->conexion->prepare("SELECT id, nombre, precio FROM productos");
        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardar($nombre, $precio)
    {
        $sql = "INSERT INTO productos (nombre, precio)
                VALUES (:nombre, :precio)";
        $consulta = $this->conexion->prepare($sql);
        $consulta->bindParam(":nombre", $nombre);
        $consulta->bindParam(":precio", $precio);
        return $consulta->execute();
    }
}
