<?php
/**
 * Archivo: delete.php
 * Función: Elimina un registro de la tabla animales según su ID.
 * Autor: pablooror
 * Fecha: 2025-06-25
 *
 * @param int $id ID del animal a eliminar, recibido por GET.
 * @return void Redirige a index.php tras la eliminación.
 */

include "../db.php";

$id = $_GET['id'];

$sql = "DELETE FROM animales WHERE id = :id";
$stmt = $conexion->prepare($sql);
$stmt->execute([':id' => $id]);

header("Location: ../index.php");
exit;
