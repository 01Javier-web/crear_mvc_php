<?php
require_once __DIR__ . "/../controllers/ProductoController.php";

define("BASE", rtrim(preg_replace("#/public$#", "", dirname($_SERVER["SCRIPT_NAME"])), "/"));

$method = $_SERVER["REQUEST_METHOD"];
$uri = substr($_SERVER["REQUEST_URI"], strlen(BASE));

if ($method === "GET" && $uri === "/productos") {
    $controller = new ProductoController();
    $controller->index();
}

if ($method === "GET" && $uri === "/productos/crear") {
    $controller = new ProductoController();
    $controller->crear();
}

if ($method === "POST" && $uri === "/productos") {
    $controller = new ProductoController();
    $controller->guardar();
}
