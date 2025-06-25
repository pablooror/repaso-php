<?php
/**
 * Archivo: index.php
 * Descripción: Muestra una tabla con todos los animales registrados en la reserva natural.
 *              Permite acceder a las opciones para agregar, editar o eliminar animales.
 * 
 * Funcionalidad:
 * - Se conecta a la base de datos mediante la inclusión de "db.php".
 * - Consulta todos los registros de la tabla "animales".
 * - Muestra los datos en una tabla HTML con columnas para nombre, especie, edad, sexo y estado.
 * - En la columna "sexo" muestra "Macho" si el valor es 0 y "Hembra" si es 1.
 * - Proporciona enlaces para editar y eliminar cada registro.
 *
 * Autor: pablooror
 * Fecha: 2025-06-25
 */


include "db.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Animales en la Reserva</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<h2>Animales en la reserva</h2>
<a href="create.php">Agregar nuevo animal</a><br><br>

<table border="1" cellpadding="8">
    <tr>
        <th>Nombre</th>
        <th>Especie</th>
        <th>Edad</th>
        <th>Sexo</th>
        <th>Estado</th>
        <th>Acciones</th>
    </tr>

    <?php
    // Ejecutar consulta con PDO
    $resultado = $conexion->query("SELECT * FROM animales");

    // Recorrer resultados con fetch(PDO::FETCH_ASSOC)
    while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
                <td>" . htmlspecialchars($row['nombre']) . "</td>
                <td>" . htmlspecialchars($row['especie']) . "</td>
                <td>" . (int)$row['edad'] . "</td>
                <td>" . (($row['sexo'] == 0) ? 'Macho' : 'Hembra') . "</td>
                <td>" . htmlspecialchars($row['estado']) . "</td>
                <td>
                    <a href='edit.php?id=" . (int)$row['id'] . "'>Editar</a> |
                    <a href='actions/delete.php?id=" . (int)$row['id'] . "' onclick='return confirm(\"¿Estás seguro de eliminar este animal?\")'>Eliminar</a>
                </td>
            </tr>";
    }
    ?>
</table>
