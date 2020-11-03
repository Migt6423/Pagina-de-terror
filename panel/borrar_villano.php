<?php

if(empty($_POST["villano"])):
    header("Location:index.php?seccion=listado&estado=error&error=no_villano");
    die();
endif;

$villano = $_POST["villano"];

if(!is_dir("../villano/$villano")):
    header("Location:index.php?seccion=listado&estado=error&error=no_villano");
    die();
endif;

unlink("../villano/$villano/$villano.png");

unlink("../villano/$villano/descripcion.txt");

rmdir("../villano/$villano");

header("Location:index.php?seccion=listado&estado=bien&bien=villano_eliminado");
die();

?>