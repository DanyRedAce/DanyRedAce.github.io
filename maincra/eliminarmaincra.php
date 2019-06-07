<!DOCTYPE html>
<html lang="en">
<head>
	<title>Maincra</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquery.js"></script>
</head>
<body>
	<?php 
			$server="localhost";
			$username = "root";
			$pass = "";
			$db= "maincra";

			$conexion = new mysqli ($server, $username, $pass, $db);

			if($conexion->connect_error){
					die("Error en la conexión: " . $conexion->connect_error);
			}

			$id_item=$_GET["id"];

			$sql = "DELETE FROM herramientas WHERE id_item=$id_item";
			$data = $conexion->query($sql); 

			if ($conexion->query($sql) === TRUE) {
			    echo "Herramienta eliminado <a href='consultarmaincra.php'>Regresar</a>";
			} else {
			    echo "Error deleting record: " . $conn->error;
			}
			
	 ?>
</body>
</html>