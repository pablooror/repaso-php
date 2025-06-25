<?php
/**
 * Archivo: update.php
 * Función: Gestiona la edición de un registro existente en la tabla animales.
 * Autor: pablooror
 * Fecha: 2025-06-25
 */

/**
 * Función para editar un animal existente en la base de datos.
 * @param int $id ID del animal a editar.
 * @param string $nombre Nombre del animal.
 * @param string $especie Especie del animal.
 * @param int $edad Edad del animal.
 * @param int $sexo Sexo del animal (0 = Macho, 1 = Hembra).
 * @param string $estado Estado de salud del animal.
 *
 * @return void Redirige al index.php después de la actualización.
 */

include "../db.php";

// Recogida segura de datos desde POST
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$especie = $_POST['especie'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$estado = $_POST['estado'];

// Preparamos y ejecutamos la consulta de actualización
$sql = "UPDATE animales 
        SET nombre = :nombre, especie = :especie, edad = :edad, sexo = :sexo, estado = :estado 
        WHERE id = :id";

$stmt = $conexion->prepare($sql);
$stmt->execute([
    ':nombre' => $nombre,
    ':especie' => $especie,
    ':edad' => $edad,
    ':sexo' => $sexo,
    ':estado' => $estado,
    ':id' => $id
]);


// Redirigimos al listado principal
header("Location: ../index.php");
exit;