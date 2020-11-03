<?php
    $seccion="villano";

    $dir = "villano";

    $recurso = opendir($dir);

?>


<div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="justificado">Villanos de terror</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2 class="blanco justificado separador2">Coloca tu mejor personaje de Terror<br> En esta galeria mostremos otros de otras peliculas</h2>
            </div>
        </div>
        <div class="row">
        <?php
                while($villano = readdir($recurso)):
                    // chequear ese . y ..
                    if($villano == "." || $villano == "..")
                        continue;

            ?>
            <div class="col-lg-3 col-md-4 col-sm-6 separador2">
                <div class="card-deck">
                    <div class="card border-dark bg-secondary">
                        <div class="card-header">
                        <img src="<?= "$dir/$villano/$villano.png"; ?>" alt="<?= $villano ?>" class="img-fluid center">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title blanco justificado"><?= str_replace("_"," ", ucfirst($villano)) ?></h4>
                        </div>
                        <div class="card-footer">
                            <h5 class="card-text blanco justificado">
                                    <?php
                                        echo nl2br(file_get_contents("$dir/$villano/clase.txt"));
                                    ?>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
            ?>
           
        </div>
</div>