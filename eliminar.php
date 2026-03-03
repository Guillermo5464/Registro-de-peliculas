<?php
$conexion = mysqli_connect("localhost", "root", "", "pelicula");

if (!$conexion) {
    die("Error de conexión");
}

if (!isset($_GET['id'])) {
    die("No llegó el ID");
}

$id = intval($_GET['id']);

$query = "DELETE FROM peliculas WHERE id = $id";

if (!mysqli_query($conexion, $query)) {
    die("Error SQL: " . mysqli_error($conexion));
}

header("Location: index.php");
exit;