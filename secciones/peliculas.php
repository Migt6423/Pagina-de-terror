
    <?php
        $seccion = "peliculas";
        $carpeta = "pelicula";
        $dir = opendir($carpeta);

?>
    <div class="container">
        <br>
        <!-- Nav pills -->
        <?php
        while($pelicula = readdir($dir)):
          if($pelicula == "." || $pelicula == "..")
            continue;
            ?>
        <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#<?= str_replace("_"," ", $pelicula); ?>"><?= str_replace("_"," ", $pelicula); ?></a>
                
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div id="<?= str_replace("_"," ", $pelicula); ?>" class="container tab-pane active"><br>
            <div class="rating-container">
            <?php echo calcularRating(nl2br(file_get_contents("$carpeta/$pelicula/rating.txt")))?>
            </div>
            <?= nl2br(file_get_contents("$carpeta/$pelicula/frame.txt")); ?>
            </div>
        </div>
        <?php
     endwhile;
     ?>
    </div>











</body>

</html>