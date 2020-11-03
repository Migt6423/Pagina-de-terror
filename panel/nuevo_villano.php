<?php
$seccion="nuevov";
// Definir si estoy editando o creando un villano

if(!empty($_GET["villano"])):
    // Estoy editando
    $titulo = "Editar villano";
    $boton  = "¡Editar!";
    $action = "editar_villano.php";
    
    $nombre = ucwords($_GET["villano"]);
    
    // Chequear que el villano exista
    if(!is_dir("../villano/$nombre")):
        header("Location:index.php?seccion=nuevo&estado=error&error=existe");
        die();
    endif;

    // Me traigo los datos del villano

    $clase = file_get_contents("../villano/$nombre/descripcion.txt");
    
    if(is_file("../villano/$nombre/$nombre.png")):
        $imagen = "../viallano/$nombre/$nombre.png";
    endif;

else:
    // Estoy creando
    $titulo = "villano";    
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
                    $mensaje = "El villano ya existe";
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
                        <form action="<?= $action; ?>" method="post" enctype="multipart/form-data">
                        <?php
                            if(isset($nombre)):
                        ?>
                                <input type="hidden" name="hat" value="<?= $nombre; ?>">
                        <?php
                            endif;
                        ?>
                              
                            <div class="form-group">
                                <label class="justificado" for="nombre">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del villano" value="">
                            </div>

                              <div class="form-group">
                              <label for="descripcion">Descripcion:</label>
                              <textarea class="form-control" name="descripcion" id="descripcion" rows="5"></textarea>
                            </div>


                            <div class="form-group">
                                <div class="form-group">
                                  <label for="imagen"></label>
                                  <input type="file" class="form-control-file" name="imagen" id="imagen" aria-describedby="fileHelpId">
                                  
                                </div>
                                <?php
                                if(isset($imagen)):
                                ?>
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="<?= $imagen; ?>" alt="<?= $nombre; ?>" class="img-fluid">
                                        </div>
                                    </div>
                                <?php
                                endif;
                                ?>
                            </div>
                           
                            <button type="submit" class="btn btn-secondary btn-block"><?= $boton; ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>