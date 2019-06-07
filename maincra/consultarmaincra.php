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
  		<a href="consultarmaincra.php"><p style="float: left; margin-right: 10px; color: white;" href=""> CONSULTAR</p></a>
  		<a href="registrarmaincra.php"><p style="float: left; margin-right: : 1px; color: white;" href="">REGISTRAR </p></a>
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

			$sql = "SELECT * FROM herramientas";
			$data = $conexion->query($sql); 
			echo '<table class="table table-hover">';
			echo '<thead>';
			echo '<tr>';
			echo '<th>ID_ITEM</th>';
			echo '<th>Nombre</th>';
			echo '<th>MATERIAL</th>';
			echo '<th>DURABILIDAD</th>';
			echo '<th>POTENCIA</th>';
			echo '<th>Editar</th>';//Opcion para editar
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			while($obj = $data->fetch_object()){
				echo '<tr><td>'.$obj->id_item.'</td>';
				echo '<td>'.$obj->nombre.'</td>';
				echo '<td>'.$obj->material.'</td>';
				echo '<td>'.$obj->durabilidad.'</td>';
				echo '<td>'.$obj->potencia.'</td>';
				echo '<td><a class="btn btn-xs btn-primary" href="editarmaincra.php?id='.$obj->id_item.'">Editar</a>  <a class="btn btn-xs btn-default" href="eliminarmaincra.php?id='.$obj->id_item.'">Eliminar</a></td></tr>';
			}
	 ?>
</div>
	<script src="js/bootstrap.js"></script>
</body>
</html>