<!DOCTYPE html>
<html>
<head>
	<title>Maincra</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquery.js"></script>
</head>
<body>
	<div class="navbar">
		<a href=""><p style="float: right; margin-left: 10px; color: white;" href="#home"> AYUDA</p></a>
  		<a href=""><p style="float: right; margin-left: 1px; color: white;" href="#news">INICIAR SESION </p></a>
  		<a href="consultarmaincra.php"><p style="float: left; margin-right: 10px; color: white;" href="consultarmaincra.php"> CONSULTAR</p></a>
  		<a href="registrarmaincra.php"><p style="float: left; margin-right: : 1px; color: white;" href="registrarmaincra.php">REGISTRAR </p></a>
	</div>

	<div class="second_navbar">
		<img style="height: 95px;" src="logo-minecraft.png">
			
	</div>

<div class="ContentContainer">
	 <div class="container">
		<div class="row well">
			<div class="col-md-6 col-md-offset-3">
				<form action="guardarmaincra.php" method="POST">
					<div class="form-group">
						<label for="Nombre">Nombre:</label>
						<input type="text" name="nombre" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Material</label>
						<input type="text" name="material" class="form-control">
					</div>
					<div class="form-group">
						<label for="Durabilidad">Durabilidad</label>
						<input type="number" name="durabilidad" class="form-control">
					</div>
					<div class="form-group">
						<label for="Potencia">Potencia</label>
						<input type="number" name="potencia" class="form-control">
					</div>
					<div class="form-group text-center">
						<input type="submit" class="btn btn-primary" value="Registar">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
	<script src="js/bootstrap.js"></script>
</body>
</html>