<?php

	$mysqli = new mysqli("localhost","root","","escuela");    //Cadena de conexion
		if(mysqli_connect_errno()){                           //Si la conexion no se efectua hara lo siguiente:
			echo'Conexion Fallida',mysqli_connect_error();    //Mandara un mensaje de conexion fallida
			exit();											  //Sale de la conexion
		}	
		else{												  //De lo contrario, puedes mandar un mensaje o una redireccion, còmo deses
		}
?>