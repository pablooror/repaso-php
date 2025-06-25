<?php
/**
 * Archivo: create.php
 * Descripción: Formulario para agregar un nuevo animal a la base de datos.
 * 
 * Funcionalidad:
 * - Permite ingresar los datos del animal: nombre, especie, edad, sexo y estado.
 * - El campo "Sexo" es un desplegable con dos opciones: Macho (0) y Hembra (1).
 * - Envía los datos por método POST a "actions/insert.php" para su inserción en la base de datos.
 * 
 * Campos del formulario:
 * - Nombre (texto, obligatorio)
 * - Especie (texto, obligatorio)
 * - Edad (numérico, obligatorio)
 * - Sexo (select, obligatorio; 0 = Macho, 1 = Hembra)
 * - Estado (texto, obligatorio)
 * 
 * Autor: pablooror
 * Fecha: 2025-06-25
 */
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Insertar animal</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>

    <h2>Agregar nuevo animal</h2>

    <form action="actions/insert.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label>Especie:</label>
        <input type="text" name="especie" required><br>

        <label>Edad:</label>
        <input type="number" name="edad" required><br>

        <label>Sexo:</label>
        <select name="sexo" required>
            <option value="0">Macho</option>
            <option value="1">Hembra</option>
        </select><br>

        <label>Estado:</label>
        <input type="text" name="estado" required><br>

        <button type="submit">Guardar</button>
    </form>

</html>
