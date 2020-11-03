<?php
$seccion="nuevop";
// Definir si estoy editando o creando la pelicula

if(!empty($_GET["pelicula"])):
    // Estoy editando
    $titulo = "pelicula";
    $boton  = "¡Editar!";
    $action = "editar_pelicula.php";
    
    $nombre = ucwords($_GET["pelciula"]);
    
    // verifico si existe la pelicula
    if(!is_dir("../pelicula/$nombre")):
        header("Location:index.php?seccion=nuevo&estado=error&error=existe");
        die();
    endif;

    // Me traigo los datos de la Pelicula

    $clase = file_get_contents("../pelicula/$nombre/descripcion.txt");
    
    if(is_file("../pelicula/$nombre/$nombre.png")):
        $imagen = "../pelicula/$nombre/$nombre.png";
    endif;

else:
    // Estoy creando
    $titulo = "pelicula";    
    $boton  = "¡Crear!";
    $action = "procesar_nuevo.php";

endif;


?>



<div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="justificado"><?= $titulo; ?></h1>
            </div>
        </div>
    </div>
    <div class="container">
        <?php

            if(!empty($_GET["estado"])):
                $estado = $_GET["estado"];
                if($estado == "error"):
                    $error= $_GET["error"];
                endif;
                    if($error == "vacio"):
                    $mensaje = "El campo <b>Nombre</b> es obligatorio";
                elseif($error == "formato"):
                    $mensaje = "Seleccione una imágen";
                elseif($error == "existe"):
                    $mensaje = "La pelicula ya existe";
                else:
                    $mensaje = "";
                endif; 
        ?>

            <div class="row justify-content-center">
                <div class="col-4 mx-5 mt-1 mb-3">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>¡Error!</strong><br> <?= $mensaje; ?>
                    </div>
                </div>
            </div>
        <?php
            endif;
        ?>
        
        <div class="row justify-content-center">
        

            <div class="col-4 mx-5 mt-1 mb-3">
                <div class="card">
                    <div class="card-body">
                        <form action="procesar_nuevo_pelicula.php" method="post" enctype="multipart/form-data">
                        <?php
                            if(isset($nombre)):
                        ?>
                                <input type="hidden" name="hat" value="<?= $nombre; ?>">
                        <?php
                            endif;
                        ?>
                              
                            <div class="form-group">
                                <label class="justificado" for="nombre">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre de la Pelicula" value="">
                            </div>
                            <div class="form-group">
                                <label class="justificado" for="nombre">Frame:</label>
                                <input type="text" class="form-control" name="frame" id="frame" placeholder="Frame de la pelicula" value="">
                            </div>
                            <div class="form-group">
                            <label for="rating">Puntaje:</label>
                            <select class="form-control" id="rating" name="rating">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            </div>
                              <div class="form-group">
                              <label for="descripcion">Clasificacion:</label>
                              <textarea class="form-control" name="descripcion" id="descripcion" rows="5"></textarea>
                            </div>

                           
                            <button type="submit" class="btn btn-secondary btn-block"><?= $boton; ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>