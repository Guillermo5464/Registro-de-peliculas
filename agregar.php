<?php
require __DIR__ . '/includes/funciones.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    insertar_pelicula($_POST);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Película</title>
    <link rel="stylesheet" href="build/css/styles.css">
</head>
<body>

<nav>
    <a href="index.php">Inicio</a>
</nav>

<div class="container">
    <h2>Agregar Película</h2>

<form method="POST">

    <!-- Título: letras y números -->
    <input type="text" name="titulo"
           placeholder="Título"
           pattern="[A-Za-z0-9 ]+"
           required>

    <!-- Género: solo letras -->
    <input type="text" name="genero"
           placeholder="Género"
           pattern="[A-Za-z ]+"
           required>

    <!-- Director: solo letras -->
    <input type="text" name="director"
           placeholder="Director"
           pattern="[A-Za-z ]+"
           required>

    <!-- Año: solo números -->
    <input type="number" name="year"
           placeholder="Año"
           min="1900" max="2100"
           required>

    <!-- Duración: solo números -->
    <input type="number" name="duracion"
           placeholder="Duración (min)"
           min="1"
           required>

    <!-- País: solo letras -->
    <input type="text" name="pais"
           placeholder="País"
           pattern="[A-Za-z ]+"
           required>

    <!-- Idioma: solo letras -->
    <input type="text" name="idioma"
           placeholder="Idioma"
           pattern="[A-Za-z ]+"
           required>

    <!-- Calificación -->
    <input type="number" name="calificacion"
           placeholder="Calificación (0-10)"
           min="0" max="10" step="0.1"
           required>

    <!-- Plataforma -->
    <input type="text" name="plataforma"
           placeholder="Plataforma"
           pattern="[A-Za-z0-9 ]+"
           required>

    <!-- Comentario -->
    <textarea name="comentario" placeholder="Comentario"></textarea>

    <button type="submit">Guardar</button>
</form>