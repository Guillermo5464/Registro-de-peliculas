<?php
$conexion = mysqli_connect("localhost", "root", "", "pelicula");

if (!$conexion) {
    echo "Error de conexión";
    exit;
}

$query = "SELECT * FROM peliculas";
$peliculas = mysqli_query($conexion, $query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Películas</title>
<link rel="stylesheet" href="build/css/styles.css"></head>
<body>

<nav>
    <h2> Registro de películas favoritas.</h2>
</nav>

<div class="container">
    <h1>Lista de Películas</h1>

    <a href="agregar.php" class="btn-agregar">+ Agregar Película</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Género</th>
            <th>Director</th>
            <th>Año</th>
            <th>Calificación</th>
            <th>Duracion</th>
            <th>Idioma</th>
            <th>Plataforma</th>
            <th>Comentario</th>
            <th>Acciones</th>
            
        </tr>

        <?php while ($row = mysqli_fetch_assoc($peliculas)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['titulo']; ?></td>
                <td><?php echo $row['genero']; ?></td>
                <td><?php echo $row['director']; ?></td>
                <td><?php echo $row['year']; ?></td>
                <td><?php echo $row['calificacion']; ?></td>
                <td><?php echo $row['duracion']; ?></td>
                <td><?php echo $row['idioma']; ?></td>
                <td><?php echo $row['plataforma']; ?></td>
                <td><?php echo $row['comentario']; ?></td>
                <td>
                    <a href="editar.php?id=<?php echo $row['id']; ?>" class="btn-editar">Editar</a>
                    <a href="eliminar.php?id=<?php echo $row['id']; ?>"
                    class="btn-eliminar"
                    onclick="return confirm('¿Seguro que deseas eliminar esta película?');">
                    Eliminar
</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>