<?php
require_once("../config.php");

if(empty($_GET["villano"])):
    header("Location:panel/index.php");
    die();
endif;

// Me llegó un nombre y una clase
$nombre = trim(ucwords($_GET["villano"])); 
$villano = $_POST['nombre'];
$villanoantiguo = $_GET['villano'];
$descripcion = $_POST['descripcion'];


file_put_contents("../villano/$villanoantiguo/descripcion.txt", $descripcion);
// Imagen
if(!empty($_FILES["imagen"])):
    $nombreimg = $_FILES["imagen"]["name"]; 
    
    if($_FILES["imagen"]["name"] && strpos($nombreimg,".png") === false):
        header("Location:index.php?seccion=nuevo&nombre=$villano&estado=error&error=formato");
        die();
    endif;
    
    $imagen  = $_FILES["imagen"];
    $origen  = $_FILES["imagen"]["tmp_name"];
    $destino = "../villano/$villanoantiguo/$villano.png";
    
    move_uploaded_file($origen, $destino);
    
endif;

$nombreLimpio = str_replace(" ","_", $villano);
$nombreLimpio = ucwords($nombreLimpio);

rename("../villano/$villanoantiguo","../villano/$nombreLimpio");

    if(is_file("../villano/$nombreLimpio/$villanoantiguo.png")):
        rename("../villano/$nombreLimpio/$villanoantiguo.png","../villano/$nombreLimpio/$nombreLimpio.png");
    endif;



header("Location:index.php?seccion=listado&estado=bien&bien=villano_editado");

?>



