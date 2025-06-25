<?php
/**
 * Archivo: db.php
 * Función: Establece la conexión PDO con la base de datos MySQL.
 * Autor: pablooror
 * Fecha: 2025-06-25
 *
 *  @param PDO $conexion: Objeto PDO para realizar consultas a la base de datos.
 */

try {
    $conexion = new PDO("mysql:host=localhost;dbname=tu_base_de_datos;charset=utf8", "usuario", "contraseña");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
