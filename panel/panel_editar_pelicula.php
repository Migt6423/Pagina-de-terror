<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="../css/estilo.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <title>Editar</title>
    </head>
    <body class="fondo-edit"> 
        <?php
        if(empty($_GET["pelicula"])):
            header("Location:index.php?seccion=editar&estado=error&error=vacio");
            die();
        endif;
        require_once("../funciones.php");
        ?>
<div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="justificado">Editar Pelicula</h1>
            </div>
        </div>
    </div>
    <?php
    $nombrepelicula = $_GET['pelicula'];
    $carpeta = "../pelicula/$nombrepelicula";

        $dir = opendir($carpeta);


?>
    <div class="container">   
        <div class="row justify-content-center">
            <div class="col-4 mx-5 mt-1 mb-3">
                <div class="card">
                    <div class="card-body">
                        <form action="editar_pelicula.php?pelicula=<?php echo$nombrepelicula?>" method="post" enctype="multipart/form-data">
                        <?php
                        while($pelicula = readdir($dir)){
                            if($pelicula == "." || $pelicula == ".."){
                            }
                        }
                            ?>
                            <div class="form-group">
                                <label for="usr">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombrepelicula?>">
                            </div>
                            <div class="form-group">
                                <label for="comment">Frame:</label>
                                <textarea class="form-control" rows="5" id="frame" name="frame">
                                <?php echo nl2br(file_get_contents("$carpeta/$pelicula/frame.txt"));?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="comment">clasificacion:</label>
                                <textarea class="form-control" rows="5" id="descripcion" name="descripcion">
                                <?php echo nl2br(file_get_contents("$carpeta/$pelicula/descripcion.txt"));?></textarea>
                            </div>

                            <div class="form-group">
                            <label for="rating">Puntaje:</label>
                            <select class="form-control" id="rating" name="rating">
                                <?php 
                                echo calcularRatingEdit(nl2br(file_get_contents("$carpeta/$pelicula/rating.txt")));
                                ?>
                            </select>
                            </div>

                            <button type="submit" class="btn btn-secondary btn-block">Editar!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    </body>
    </html>