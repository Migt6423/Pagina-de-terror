<?php
$seccion="listadop";
require_once("../funciones.php");
?>

<section class="container">
<?php

            if(!empty($_GET["estado"])):
                $estado = $_GET["estado"];
                if($estado == "bien"):
                    $bien= $_GET["bien"];
                
              
?>

    <div class="row justify-content-center">
            <div class="col-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>¡Felicidades! </strong> <br> <?= exito($bien); ?>
                </div>
            </div>
        </div>
<?php
                elseif($estado == "error"):
                    $error= $_GET["error"];

                    if($error == "no_pelicula"):
                        $mensaje = "la pelicula que quiere borrar no existe";
                    else:
                        $mensaje = "";
                    endif; 
?>

<div class="row justify-content-center">
        <div class="col-6">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong>¡Error! </strong> <br> <?= $mensaje; ?>
            </div>
        </div>
</div>

<?php
             endif;
    endif;
?>

<div class="row my-4">
    <article class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="text-secondary card-title justificado">Listado de pelicula
                <img src="../img/Ghostbusters_logo.png" alt="ghost-buster" width="80"></h4>
            </div>
            <div class="card-body form-fondo">

            <a href="index.php?seccion=nuevop" class="btn btn-sm btn-success float-right my-2">nueva pelicula</a>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm fs-90">
                        <thead class="thead-light text-center">
                        <tr>
                            <th>Nombre</th>
                            <th>Frame</th>
                            <th>Clasificación</th>
                            <th>Rating</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        <?php
                            $carpeta = "../pelicula";
                            $dir = opendir($carpeta);

                            while($pelicula = readdir($dir)):
                                if($pelicula == "." || $pelicula == "..")
                                    continue;
                                    /*
                                    <a href="editar_pelicula.php?seccion=editar&pelicula=<?= $pelicula; ?>" class="btn btn-sm btn-primary">Editar</a>
                                    */
                        ?>
                                <tr>
                                    
                                    <td class="py-3 text-white"><?= str_replace("_"," ", $pelicula); ?></td>
                                    <td class="py-3 text-white"><?= nl2br(file_get_contents("$carpeta/$pelicula/frame.txt")); ?></td>
                                    <td class="py-3 text-white"><?= nl2br(file_get_contents("$carpeta/$pelicula/descripcion.txt")); ?></td>
                                    <!-- Rating -->
                                    <td class="py-3 text-white">
                                    <div class="rating-container">
                                    <?php
                                     echo calcularRating(nl2br(file_get_contents("$carpeta/$pelicula/rating.txt")));
                                     ?>
                                     </div>
                                    </td>
                                    <!-- Botones -->
                                    <td class="py-3">
                                            <div class="separador2">
                                            </div>
                                            <form action="borrar_pelicula.php" method="post">
                                                    <input type="hidden" name="pelicula" value="<?= $pelicula; ?>">
                                                    <button type="submit"  class="btn btn-sm btn-danger">Borrar &nbsp; <img src="../img/knife.png" alt="knife" width="25px"></button>
                                                    <a href="panel_editar_pelicula.php?seccion=editar&pelicula=<?php echo $pelicula?>" class="btn btn-sm btn-primary">Editar &nbsp; <img src="../img/eyeball.png" alt="eyeball" width="25px"></a>
                                            </form>
                                    </td>
                                </tr>
                            <?php
                            endwhile;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </article>
</div>

<audio controls autoplay="true">
	<source src="../sound/fear.mp3" type="audio/mpeg">
	<source src="../sound/fear.ogg" type="audio/ogg">
	Your browser does not support the audio tag.
</audio>

</section>