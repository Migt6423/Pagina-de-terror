<?php
require_once("../config.php");

if(empty($_GET["pelicula"])):
    header("Location:panel/index.php");
    die();
endif;

// Me llegó un nombre y una clase
$nombre = trim(ucwords($_GET["pelicula"])); 
$pelicula = $_POST['nombre'];
$peliculaanterior = $_GET['pelicula'];
$descripcion = $_POST['descripcion'];
$frame = $_POST['frame'];
$rating = $_POST['rating'];

file_put_contents("../pelicula/$peliculaanterior/descripcion.txt", $descripcion);
file_put_contents("../pelicula/$peliculaanterior/frame.txt", $frame);
file_put_contents("../pelicula/$peliculaanterior/rating.txt", $rating);

$nombreLimpio = str_replace(" ","_", $pelicula);
$nombreLimpio = ucwords($nombreLimpio);

rename("../pelicula/$peliculaanterior","../pelicula/$pelicula");



header("Location:index.php?seccion=listadop&estado=bien&bien=pelicula_editado");

?>



