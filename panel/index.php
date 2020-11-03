<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <title>Iconos del Terror</title>
    <?php 
    require_once("../funciones.php");
    require_once("../config.php");
    //require_once("../arrays.php");
    ?>
</head>
<?php 
session_start();
if(empty($_SESSION["usuario"])){

  header("Location:../index.php?usuario=!admin");

}

?>

<body class="bak">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
          <a class="navbar-brand" href="index.php">
                <img src="../img/mask.png" height="30" width="35" alt="Home">
              </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                <span class="navbar-text">
                        Bienvenido Administrador
                </span>
                </li>
          </ul>
          <ul class="navbar-nav ml-auto">
                <li>
                <a href="index.php?seccion=listadov" class="nav-link">Panel Villanos</a>
                </li>
                <li>
                <a href="index.php?seccion=listadop" class="nav-link">Panel Peliculas</a>
                </li>
                <li class="nav-item">
                <a href="../index.php" class="nav-link">Ir al Home</a>
                </li>
                <li class="nav-item">
                <a href="../logout.php" class="nav-link">Cerrar Sesión</a>
                </li>
                
            </ul>
          </div>
        </div>
      </nav>
      <?php
      if(!empty($_GET["seccion"])){
            if($_GET["seccion"]=="listadov"){
                require_once("listado_villano.php");
            }elseif($_GET["seccion"]=="nuevo"){
                require_once("nuevo_villano.php");
            }elseif($_GET["seccion"]=="listadop"){
                require_once("listado_pelicula.php");
            }elseif($_GET["seccion"]=="nuevov"){
              require_once("nuevo_villano.php");
            }elseif($_GET["seccion"]=="nuevop"){
              require_once("nuevo_pelicula.php");

            }else{
                require_once("listado_villano.php");
            }
      }else{
        require_once("listado_villano.php");
      }    
?>



<hr>
<footer class="footer text-center">
    <div class="copyright py-4 text-center text-white">
        <div class="container">
        <small>Copyright <a class="ee"href="../html/ee.html">©</a> Miguel Torrealba</small>
        </div>
      </div>
  </footer>


<script src="../lib/jquery/jquery-3.3.1.min.js"></script>
<script src="../lib/popper/popper.min.js"></script>
<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>