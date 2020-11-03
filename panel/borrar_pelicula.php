<?php

if(empty($_POST["pelicula"])):
    header("Location:index.php?seccion=listado&estado=error&error=no_pelicula");
    die();
endif;

$pelicula = $_POST["pelicula"];

if(!is_dir("../pelicula/$pelicula")):
    header("Location:index.php?seccion=listado&estado=error&error=no_pelicula");
    die();
endif;


unlink("../pelicula/$pelicula/descripcion.txt");
unlink("../pelicula/$pelicula/frame.txt");
unlink("../pelicula/$pelicula/rating.txt");

rmdir("../pelicula/$pelicula");

header("Location:index.php?seccion=listadop&pelicula=borrado");
die();

?>