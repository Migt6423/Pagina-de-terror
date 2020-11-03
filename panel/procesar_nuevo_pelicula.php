<?php
require_once("../config.php");
require_once("../funciones.php");
if(empty($_POST["nombre"])):
    header("Location:index.php?seccion=nuevo&estado=error&error=vacio");
    die();
endif;

// Me llegó un nombre y una clase
$nombre = trim(ucwords($_POST["nombre"])); 
$nombrelimpio = str_replace(" ","_", $nombre);
$descripcion = $_POST["descripcion"];
$frame = $_POST['frame'];
$limpio = limpiarChanchadas($descripcion);
$rating = $_POST['rating'];

// Chequeo si la carpeta de la pelicula ya está creado
if(is_dir("../pelicula/$nombrelimpio")):
    header("Location:index.php?seccion=nuevo&estado=error&error=existe");
    die();
endif;

// Si la pelicula no existe creo la carpeta
mkdir("../pelicula/$nombrelimpio");

// Creo el archivo Descripcion.txt
link("../pelicula/$nombrelimpio/descripcion.txt");
// Creo el archivo <frame class="txt">
link("../pelicula/$nombrelimpio/frame.txt");
// Creo el archivo rating.txt
link("../pelicula/$nombrelimpio/rating.txt");

// Agrego la descripcion
file_put_contents("../pelicula/$nombrelimpio/descripcion.txt", $limpio);
// agrego el frame
file_put_contents("../pelicula/$nombrelimpio/frame.txt", $frame);
// agrego el puntaje
file_put_contents("../pelicula/$nombrelimpio/rating.txt", $rating);

header("Location:index.php?seccion=listadop&estado=bien&bien=pelicula_creado");


?>