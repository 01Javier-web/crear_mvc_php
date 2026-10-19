<?php
function obtenerConexion()
{
    $env = parse_ini_file(__DIR__ . "/../.env");

    $dsn = "mysql:host=" . $env["DB_HOST"] . ";port=" . $env["DB_PORT"] . ";dbname=" . $env["DB_DATABASE"] . ";charset=utf8mb4";

    return new PDO($dsn, $env["DB_USERNAME"], $env["DB_PASSWORD"]);
}
