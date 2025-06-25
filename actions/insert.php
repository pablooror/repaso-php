<?php
/**
 * Archivo: insert.php
 * Función: Gestiona la inserción de un nuevo registro en la tabla animales.
 * Autor: pablooror
 * Fecha: 2025-06-25
 */

/**
 * Función para insertar un nuevo animal en la base de datos.
 * @param PDO $conexion Conexión activa a la BD.
 * @param string $nombre Nombre del animal.
 * @param string $especie Especie del animal.
 * @param int $edad Edad del animal.
 * @param int $sexo Sexo del animal (0 = Macho, 1 = Hembra).
 * @param string $estado Estado de salud del animal.
 * @return bool Devuelve true si la inserción fue exitosa, false en caso contrario.
 */

include '../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $especie = $_POST['especie'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $estado = $_POST['estado'];

    $sql = "INSERT INTO animales (nombre, especie, edad, sexo, estado) VALUES (:nombre, :especie, :edad, :sexo, :estado)";
    $stmt = $conexion->prepare($sql);
    $stmt->execute([
        ':nombre' => $nombre,
        ':especie' => $especie,
        ':edad' => $edad,
        ':sexo' => $sexo,
        ':estado' => $estado
    ]);

    header("Location: ../index.php");
    exit();
}
?>
