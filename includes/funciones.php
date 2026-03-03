<?php

/* =========================
   OBTENER TODAS LAS PELÍCULAS
   ========================= */
function obtener_peliculas() {
    require 'database.php';
    $sql = "SELECT * FROM peliculas";
    return mysqli_query($db, $sql);
}

/* =========================
   OBTENER UNA PELÍCULA POR ID
   ========================= */
function obtener_pelicula($id) {
    require 'database.php';
    $id = mysqli_real_escape_string($db, $id);
    $sql = "SELECT * FROM peliculas WHERE id = '$id'";
    $consulta = mysqli_query($db, $sql);
    return mysqli_fetch_assoc($consulta);
}

/* =========================
   INSERTAR PELÍCULA
   ========================= */
function insertar_pelicula($datos) {
    require 'database.php';

    $titulo = mysqli_real_escape_string($db, $datos['titulo']);
    $genero = mysqli_real_escape_string($db, $datos['genero']);
    $director = mysqli_real_escape_string($db, $datos['director']);
    $year = (int) $datos['year'];
    $duracion = (int) $datos['duracion'];
    $pais = mysqli_real_escape_string($db, $datos['pais']);
    $idioma = mysqli_real_escape_string($db, $datos['idioma']);
    $calificacion = (float) $datos['calificacion'];
    $plataforma = mysqli_real_escape_string($db, $datos['plataforma']);
    $comentario = mysqli_real_escape_string($db, $datos['comentario']);

    $sql = "INSERT INTO peliculas
    (titulo, genero, director, year, duracion, pais, idioma, calificacion, plataforma, comentario)
    VALUES
    ('$titulo','$genero','$director',$year,$duracion,'$pais','$idioma',$calificacion,'$plataforma','$comentario')";

    mysqli_query($db, $sql);
    header('Location: index.php');
    exit;
}

/* =========================
   EDITAR PELÍCULA
   ========================= */
function editar_pelicula($datos) {
    require 'database.php';

    $id = mysqli_real_escape_string($db, $datos['id']);
    $titulo = mysqli_real_escape_string($db, $datos['titulo']);
    $genero = mysqli_real_escape_string($db, $datos['genero']);
    $director = mysqli_real_escape_string($db, $datos['director']);
    $year = (int) $datos['year'];
    $duracion = (int) $datos['duracion'];
    $pais = mysqli_real_escape_string($db, $datos['pais']);
    $idioma = mysqli_real_escape_string($db, $datos['idioma']);
    $calificacion = (float) $datos['calificacion'];
    $plataforma = mysqli_real_escape_string($db, $datos['plataforma']);
    $comentario = mysqli_real_escape_string($db, $datos['comentario']);

    $sql = "UPDATE peliculas SET
        titulo='$titulo',
        genero='$genero',
        director='$director',
        year=$year,
        duracion=$duracion,
        pais='$pais',
        idioma='$idioma',
        calificacion=$calificacion,
        plataforma='$plataforma',
        comentario='$comentario'
    WHERE id='$id'";

    mysqli_query($db, $sql);
    header('Location: index.php');
    exit;
}

/* =========================
   ELIMINAR PELÍCULA
   ========================= */
function eliminar_pelicula($id) {
    require 'database.php';
    $id = mysqli_real_escape_string($db, $id);
    $sql = "DELETE FROM peliculas WHERE id='$id'";
    mysqli_query($db, $sql);
    header('Location: index.php');
    exit;
}