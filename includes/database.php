<?php
    $db = mysqli_connect('localhost', 'root', '', 'pelicula');

    if(!$db) {
        echo "Hubo un error";
        exit;
    }