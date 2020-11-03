<?php
$seccion="listadov";
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

                    if($error == "no_villano"):
                        $mensaje = "El villano que quiere borrar no existe";
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
                <h4 class="text-secondary card-title justificado">Listado de villanos 
                <img src="../img/Ghostbusters_logo.png" alt="ghost-buster" width="80"></h4>
            </div>
            <div class="card-body form-fondo">

            <a href="index.php?seccion=nuevo" class="btn btn-sm btn-success float-right my-2">nuevo villano</a>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm fs-90">
                        <thead class="thead-light text-center">
                        <tr>
                            <th>Nombre</th>
                            <th>Imágen</th>
                            <th>Descripcion</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        <?php
                            $carpeta = "../villano";
                            $dir = opendir($carpeta);

                            while($villano = readdir($dir)):
                                if($villano == "." || $villano == "..")
                                    continue;
                                    /*
                                    <a href="editar_villano.php?seccion=editar&villano=<?= $villano; ?>" class="btn btn-sm btn-primary">Editar</a>
                                    */
                        ?>
                                <tr>
                                    
                                    <td class="py-3 text-white"><?= str_replace("_"," ", $villano); ?></td>
                                    <?php 
                                    if(is_file("$carpeta/$villano/$villano.png")){
                                        ?>
                                        <td class="py-3"><img width="75" src="<?= "$carpeta/$villano/$villano.png" ?>" alt="<?= $villano; ?>"></td>
                                    <?php
                                    }else{
                                        ?>
                                        <td class="py-3"><img width="75" src="<?= "../img/noimg.png" ?>" alt="<?= $villano; ?>"></td>
                                    <?php
                                    }
                                    ?>
                                    <td class="py-3 text-white"><?= nl2br(file_get_contents("$carpeta/$villano/descripcion.txt")); ?></td>
                                    <td class="py-3">
                                            <div class="separador2">
                                            </div>
                                            <form action="borrar_villano.php" method="post">
                                                    <input type="hidden" name="villano" value="<?= $villano; ?>">
                                                    <button type="submit"  class="btn btn-sm btn-danger">Borrar &nbsp; <img src="../img/knife.png" alt="knife" width="25px"></button>
                                                    <a href="panel_editar.php?seccion=editar&villano=<?php echo $villano?>" class="btn btn-sm btn-primary">Editar &nbsp; <img src="../img/eyeball.png" alt="eyeball" width="25px"></a>
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