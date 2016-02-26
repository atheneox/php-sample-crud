<?php include ("conexion.php"); ?>

<html>
<head>
	<title> Usuarios
	</title>
</head>
				<h1 align="center">  Tabla de notas</h1>
		<?php
		$query="SELECT id_alumno, id_materia, calificacion from calificacion_alumno";
		$result = $mysqli->query($query);
		?>

	<body>
	
	<table align="center">
		<tr>
			<td> <a href="i_estudiante.php">    Agregar estudiantes    </a> </td> &nbsp; &nbsp;
			<td> <a href="i_materia.php">       Agregar materia        </a> </td> &nbsp; &nbsp;
			<td> <a href="i_nota.php">          Agregar notas          </a> </td> &nbsp; &nbsp;
			<td> <a href="v_nota.php">          Ver notas              </a> </td> &nbsp; &nbsp;
			<td> <a href="v_estudiantes.php">   Ver estudiantes        </a> </td> &nbsp; &nbsp;
			<td> <a href="v_materias.php">      Ver materias           </a> </td> &nbsp; &nbsp;
		</tr>
	</table>
	
	<br><br>

	<table align="center" border="4" width="70%">
		<tr>
			    <td align="center"> Materia</td>
				<td align="center"> Alumno </td>
				<td align="center"> Nota   </td>
		</tr>
		
		
		<?php while($row=$result->fetch_assoc()){ ?>
		<tr>
				<td align="center"> <?php   echo $row ['id_alumno'];    ?> </td>
				<td align="center"> <?php   echo $row ['id_materia'];   ?> </td>
				<td align="center"> <?php   echo $row ['calificacion']; ?> </td>
		</tr>
		<?php } ?>
		
		
	<table>
	

		
</body>