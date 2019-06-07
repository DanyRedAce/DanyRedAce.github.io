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
	<?php 
		$server="localhost";
		$username = "root";
		$pass = "";
		$db= "maincra";

		$conexion = new mysqli ($server, $username, $pass, $db);

		if($conexion->connect_error){
				die("Error en la conexión: " . $conexion->connect_error);
		}
		$id_item = $_GET['id'];

		$sql = "SELECT * FROM herramientas WHERE id_item=$id_item";
		$herramientas = $conexion->query($sql)->fetch_object();
	 ?>
	 <div class="container">
		<div class="row well">
			<div class="col-md-6 col-md-offset-3">
				<form action="updatemaincra.php" method="POST">
					<input type="hidden" name="id_item" value="<?php echo $herramientas->id_item;  ?>">
					<div class="form-group">
						<label for="Nombre">Nombre:</label>
						<input type="text" name="nombre" class="form-control" value="<?php echo $herramientas->nombre; ?>">
					</div>
					<div class="form-group">
						<label for="">Material</label>
						<input type="text" name="material" class="form-control" value="<?php echo $herramientas->material; ?>">
					</div>
					<div class="form-group">
						<label for="Durabilidad">Durabilidad</label>
						<input type="number" name="durabilidad" class="form-control" value="<?php echo $herramientas->durabilidad; ?>">
					</div>
					<div class="form-group">
						<label for="Potencia">Potencia</label>
						<input type="number" name="potencia" class="form-control" value="<?php echo $herramientas->potencia; ?>">
					</div>
					<div class="form-group text-center">
						<input type="submit" class="btn btn-primary" value="Guardar">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
	<script src="js/bootstrap.js"></script>
</body>
</html>