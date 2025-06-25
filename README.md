# CRUD de Animales en la Reserva

Este proyecto es una aplicación web sencilla para gestionar un registro de animales en una reserva, desarrollada en PHP con una base de datos MySQL.

---

## Tecnologías utilizadas

- PHP 8.x
- MySQL
- PDO para conexión a la base de datos
- HTML, CSS (con estilos básicos)
- Git para control de versiones

---

## Funcionalidades

- Listar todos los animales registrados
- Crear un nuevo animal con datos: nombre, especie, edad, sexo y estado
- Editar información de un animal existente
- Eliminar un animal del registro

---

## Estructura del proyecto

- `/index.php` — Página principal que muestra la lista de animales
- `/create.php` — Formulario para agregar un nuevo animal
- `/edit.php` — Formulario para editar un animal existente
- `/actions/insert.php` — Script para insertar datos en la base
- `/actions/update.php` — Script para actualizar datos
- `/actions/delete.php` — Script para eliminar un registro
- `/db.php` — Archivo de conexión a la base de datos
- `/style.css` — Estilos básicos para la interfaz

---

## Instalación y uso

1. Clonar el repositorio:
   ```bash
   git clone https://github.com/pablooror/nombre-del-repo.git
