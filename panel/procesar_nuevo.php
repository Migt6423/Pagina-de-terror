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
$limpio = limpiarChanchadas($descripcion);

// Chequeo si la carpeta del villano ya está creado
if(is_dir("../villano/$nombrelimpio")):
    header("Location:index.php?seccion=nuevo&estado=error&error=existe");
    die();
endif;

// Si el villano no existe creo la carpeta
mkdir("../villano/$nombrelimpio");

// Creo el archivo Descripcion.txt
link("../villano/$nombrelimpio/descripcion.txt");

// Agrego la descripcion
file_put_contents("../villano/$nombrelimpio/descripcion.txt", $limpio);

if(is_file("../villano/$nombre/$nombre.png")):
    $imagen = "../villano/$nombre/$nombre.png";
endif;

// Imagen
if(!empty($_FILES["imagen"])):
    /*
    if($_FILES["imagen"]["name"] && strpos($nombrevillano,".png") === false):
        header("Location:index.php?seccion=nuevo&estado=error&error=formato");
        die();
    endif;
*/
    $imagen  = $_FILES["imagen"];
    $origen  = $_FILES["imagen"]["tmp_name"];
    $destino = "../villano/$nombrelimpio/$nombrelimpio.png";

    move_uploaded_file($origen, $destino);

endif;

header("Location:index.php?seccion=listado&estado=bien&bien=villano_creado");


?>