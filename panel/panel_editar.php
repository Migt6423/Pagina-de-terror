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
        if(empty($_GET["villano"])):
            header("Location:index.php?seccion=editar&estado=error&error=vacio");
            die();
        endif;
        ?>
<div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="justificado">Editar Villano</h1>
            </div>
        </div>
    </div>
    <?php
    $nombrevillano = $_GET['villano'];
    $carpeta = "../villano/$nombrevillano";

        $dir = opendir($carpeta);


?>
    <div class="container">   
        <div class="row justify-content-center">
            <div class="col-4 mx-5 mt-1 mb-3">
                <div class="card">
                    <div class="card-body">
                        <form action="editar_villano.php?villano=<?php echo$nombrevillano?>" method="post" enctype="multipart/form-data">
                        <?php
                        while($villano = readdir($dir)){
                            if($villano == "." || $villano == ".."){
                            }
                        }
                            ?>
                            <div class="form-group">
                                <label for="usr">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombrevillano?>">
                            </div>
                            <div class="form-group">
                                <label for="comment">Descripcion:</label>
                                <textarea class="form-control" rows="5" id="descripcion" name="descripcion">
                                <?php echo nl2br(file_get_contents("$carpeta/$villano/descripcion.txt"));?></textarea>
                            </div>
                            <div>
                            <label for="form-group">Imagen:</label> <br>
                            <img width="75" src="<?= "$carpeta/$villano/$nombrevillano.png" ?>" alt="<?= $villano; ?>">
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                  <label for="imagen"></label>
                                  <input type="file" class="form-control-file" name="imagen" id="imagen" aria-describedby="fileHelpId">
                                  <small id="fileHelpId" class="form-text text-muted"> Seleccionar nueva imagen </small>
                                </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="" alt="" class="img-fluid">
                                        </div>
                                    </div>
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