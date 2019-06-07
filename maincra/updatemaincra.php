<?php 
		$server="localhost";
		$username = "root";
		$pass = "";
		$db= "maincra";

		$conexion = new mysqli ($server, $username, $pass, $db);

		if($conexion->connect_error){
				die("Error en la conexión: " . $conexion->connect_error);
		}

		$id_item = $_POST["id_item"];
		$nombre = $_POST["nombre"];
		$material = $_POST["material"];
		$durabilidad = $_POST["durabilidad"];
		$potencia = $_POST["potencia"]; 

		$sql = "UPDATE herramientas SET nombre='$nombre', material='$material', durabilidad=$durabilidad, potencia=$potencia WHERE id_item=$id_item";

		if ($conexion->query($sql) === TRUE) {
   			 echo "Registro de alumno modificado <a href='consultarmaincra.php'>Regresar</a>";
		} else {
			echo "ocurrió un error";
			echo $conexion->error;
			echo $sql;
		}
		$conexion->close();
 ?>