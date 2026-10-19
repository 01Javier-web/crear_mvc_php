<?php
require_once __DIR__ . "/../models/Producto.php";

class ProductoController
{
    private $producto;

    public function __construct()
    {
        $this->producto = new Producto();
    }

    public function index()
    {
        $productos = $this->producto->listar();
        require_once __DIR__ . "/../views/productos/index.php";
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/productos/crear.php";
    }

    public function guardar()
    {
        $nombre = trim($_POST["nombre"]);
        $precio = $_POST["precio"];

        $resultado = $this->producto->guardar($nombre, $precio);

        if ($resultado) {
            echo "Producto registrado correctamente";
        }
    }
}
