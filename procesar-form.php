<?php
//PARA VERIFICAR QUE ESTE CONSIGUIENDO TODO:
/*echo "<pre>";
    print_r($_POST);
echo "</pre>";
die();*/
require_once("funciones.php");
require_once("config.php");

error("nombre");
error("apellido");
error("email");
error("villano");
error("pregunta");
error("comentario");

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$email = $_POST["email"];
$intereses = $_POST["check"];
$intereses_string = implode(" - ", $intereses);

$villano = $_POST["villano"];
$pregunta = $_POST["pregunta"];
$comentario = $_POST["comentario"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <title>iconos del terror</title>
</head>
<body class="bakagain">


<div class="container">
    <div class="row justify-content-center separador3">
        <div class="col-auto">
            <h1>¡Datos enviados!</h1>
            <br>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-8">
            <table class="table table-striped table-dark responsive">
            <thead>
                <tr>
                <th scope="col" class="wi">Dato Pedido</th>
                <th class="justificado" scope="col">Dato ingresado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">Nombre</th>
                <td><?=$nombre?></td>
                </tr>
                <tr>
                <th scope="row">Apellido</th>
                <td><?=$apellido?></td>
                </tr>
                <tr>
                <th scope="row">Email</th>
                <td><?=$email?></td>
                </tr>
                <tr>
                <th scope="row">Peliculas</th>
                <td><?php foreach($_POST['check'] as $selected){print_r($selected."--");}?>
                </td>
                </tr>
                <tr>
                <th scope="row">Villano</th>
                <td><?=$villano?></td>
                </tr>
                <tr>
                <th scope="row">Pregunta</th>
                <td><div class="caja"><?=$pregunta?></div></td>
                </tr>
                <tr>
                <th scope="row">Comentario</th>
                <td><div class="caja"><?=$comentario?></div></td>
                </tr>
            </tbody>
            </table>
<a href="index.php" class="btn btn-outline-success center bottom" role="button">Volver a la Página Principal</a>
        </div>
    </div>
</div>



<script src="lib/jquery/jquery-3.3.1.min.js"></script>
<script src="lib/popper/popper.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>