CREATE DATABASE IF NOT EXISTS taller_create_mvc;
USE taller_create_mvc;

CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    precio DECIMAL(10,2) NOT NULL
);
