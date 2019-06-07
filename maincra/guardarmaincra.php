<?php 
			$server="localhost";
			$username = "root";
			$pass = "";
			$db= "maincra";

			$conexion = new mysqli ($server, $username, $pass, $db);

			if($conexion->connect_error){
					die("Error en la conexión: " . $conexion->connect_error);
			}

			$nombre = $_POST["nombre"];
			$material = $_POST["material"];
			$durabilidad = $_POST["durabilidad"];
			$potencia = $_POST["potencia"]; 

			$sql = "INSERT INTO herramientas (nombre, material, durabilidad, potencia)
							VALUES ('$nombre', '$material', $durabilidad, $potencia)";

			if($conexion->query($sql) === TRUE){
				echo "Registro insertado <a href='registrarmaincra.php'>Regresar</a>";
			} else {
				echo "Error: " .$sql. "<br>" . $conexion->error;
			}
 ?>