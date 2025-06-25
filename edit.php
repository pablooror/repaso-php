<?php
/**
 * Archivo: edit.php
 * Descripción: Muestra un formulario para editar los datos de un animal específico.
 * 
 * Funcionalidad:
 * - Recibe por GET el ID del animal a editar.
 * - Consulta la base de datos para obtener los datos actuales del animal.
 * - Si el animal no existe o no se pasa ID, muestra un mensaje de error.
 * - Rellena el formulario con los datos actuales del animal.
 * - El formulario envía los datos a "actions/update.php" mediante POST para actualizar la base de datos.
 * 
 * Campos del formulario:
 * - Nombre (texto)
 * - Especie (texto)
 * - Edad (numérico)
 * - Sexo (desplegable: 0 = Macho, 1 = Hembra)
 * - Estado (texto)
 * 
 * Autor: pablooror
 * Fecha: 2025-06-25
 */

include "db.php";

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];

    // Obtenemos datos del animal
    $stmt = $conexion->prepare("SELECT * FROM animales WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $animal = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$animal) {
        echo "Animal no encontrado.";
        exit;
    }
} else {
    echo "No se especificó ID.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Editar animal</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<h2>Editar animal</h2>

<form action="actions/update.php" method="POST">
    <input type="hidden" name="id" value="<?= $animal['id'] ?>">

    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?= htmlspecialchars($animal['nombre']) ?>" required><br>

    <label>Especie:</label>
    <input type="text" name="especie" value="<?= htmlspecialchars($animal['especie']) ?>" required><br>

    <label>Edad:</label>
    <input type="number" name="edad" value="<?= (int)$animal['edad'] ?>" required><br>

    <label>Sexo:</label>
    <select name="sexo" required>
        <option value="0" <?= $animal['sexo'] == 0 ? 'selected' : '' ?>>Macho</option>
        <option value="1" <?= $animal['sexo'] == 1 ? 'selected' : '' ?>>Hembra</option>
    </select><br>

    <label>Estado:</label>
    <input type="text" name="estado" value="<?= htmlspecialchars($animal['estado']) ?>" required><br>

    <button type="submit">Actualizar</button>
</form>
