<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <title>Iconos del terror</title>
    <?php 
    require_once("funciones.php");
    require_once("config.php");
    require_once("arrays.php");
    ?>
</head>
<body class="bak">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
          <a class="navbar-brand" href="index.php">
                <img src="img/mask.png" height="30" width="35" alt="Home">
              </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
          
          
              <?php foreach($navbar as $nombre=>$url):?>
                <li <?=activo($nombre)?> class="nav-item">
                <a class="nav-link" href="<?=$url?>"><?=$nombre?></a>
              </li>
              <?php endforeach; ?>
              <?php 
              if(!empty($_SESSION["usuario"])){
                  ?>
                  <li class="text-white"><?php print_r($_SESSION["usuario"]["nombre"])?></li>
                  <?php
              }
              ?>

            </ul>
          </div>
        </div>
      </nav>

      <?php
      if(!empty($_GET["seccion"])){
            if($_GET["seccion"]=="home"){
                require_once("secciones/home.php");
            }elseif($_GET["seccion"]=="galeria"){
                require_once("secciones/galeria.php");
            }elseif($_GET["seccion"]=="villano"){
                require_once("secciones/villano.php");
            }elseif($_GET["seccion"]=="formulario"){
                require_once("secciones/formulario.php");
              }elseif($_GET["seccion"]=="peliculas"){
                require_once("secciones/peliculas.php");

                /*
            }elseif($_GET["seccion"]=="registro"){
                require_once("secciones/registro.php");
            }elseif($_GET["seccion"]=="login"){
                require_once("secciones/login.php");
                */
            }else{
                require_once("secciones/home.php");
            }
      }else{
        require_once("secciones/home.php");
        }    
?>

<?php
    if(empty($_GET["seccion"]) || (!empty($_GET["seccion"]) && !($_GET["seccion"] == "registro" || $_GET["seccion"] == "login") )):
?>



<hr>
<footer class="footer text-center">
    <div class="copyright py-4 text-center text-white">
        <div class="container">
        <small>Copyright <a class="ee"href="html/ee.html">©</a> Miguel Torrealba</small>
        </div>
      </div>
  </footer>
  <?php
endif;
?>

<script src="lib/jquery/jquery-3.3.1.min.js"></script>
<script src="lib/popper/popper.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>