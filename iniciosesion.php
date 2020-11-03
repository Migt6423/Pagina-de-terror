<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/sesion.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iconos del Terror</title>
</head>
<body class="bak">
<?php
if($_GET['seccion'] == 'iniciar'){

	if(!empty($_GET['estado'] == 'error')){
		?>
		<div class="alert alert-danger"> 
		<strong>Error!</strong> Parece que esa cuenta no existe.
	  </div>
	  <?php
	}
?>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Iniciar Sesion</h3>
			</div>
			<div class="card-body">
				<form action="procesar-login.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="email" name="email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="contraseña" name="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Recordar
					</div>
					<div class="form-group">
						<input type="submit" value="Loguear" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					No tienes cuenta?<a href="iniciosesion.php?seccion=registrar">Registrarse</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Perdiste tu cuenta?</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
}
if($_GET["seccion"] == "registrar"){
    ?>
    <div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Registrar Usuario</h3>
			</div>
			<div class="card-body">
				<form action="procesar-registro.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="usuario" name="nombre">
						</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="contraseña" name="password">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="email" class="form-control" placeholder="email" name="email">
					</div>
					<div class="form-group">
						<input type="submit" value="Registrar" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Ya estoy registrado!<a href="iniciosesion.php?seccion=iniciar">Volver</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
}
?>
</body>
</html>