<?php
require __DIR__ . '/includes/funciones.php';

// Si se envía el formulario, actualizar
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    editar_pelicula($_POST);
}

// Obtener ID
$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location: index.php');
    exit;
}

// Obtener película
$pelicula = obtener_pelicula($id);
if (!$pelicula) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Película</title>
    <link rel="stylesheet" href="build/css/styles.css">
</head>
<body>

<nav>
    <a href="index.php">Inicio</a>
</nav>

<div class="container">
    <h2>Editar Película</h2>

   <form method="POST">

    <input type="hidden" name="id" value="<?php echo $pelicula['id']; ?>">

    <input type="text" name="titulo"
           value="<?php echo $pelicula['titulo']; ?>"
           pattern="[A-Za-z0-9 ]+"
           required>

    <input type="text" name="genero"
           value="<?php echo $pelicula['genero']; ?>"
           pattern="[A-Za-z ]+"
           required>

    <input type="text" name="director"
           value="<?php echo $pelicula['director']; ?>"
           pattern="[A-Za-z ]+"
           required>

    <input type="number" name="year"
           value="<?php echo $pelicula['year']; ?>"
           min="1900" max="2100"
           required>

    <input type="number" name="duracion"
           value="<?php echo $pelicula['duracion']; ?>"
           min="1">

    <input type="text" name="idioma"
           value="<?php echo $pelicula['idioma']; ?>"
           pattern="[A-Za-z ]+">

    <input type="number" name="calificacion"
           value="<?php echo $pelicula['calificacion']; ?>"
           min="0" max="10" step="0.1"
           required>

    <input type="text" name="plataforma"
           value="<?php echo $pelicula['plataforma']; ?>"
           pattern="[A-Za-z0-9 ]+">

    <textarea name="comentario"><?php echo $pelicula['comentario']; ?></textarea>

    <button type="submit">Actualizar</button>
</form>