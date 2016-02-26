<?php include ("conexion.php"); ?>

<html>
<head>
	<title> Usuarios
	</title>
</head>
				<h1 align="center">  Tabla de alumnos</h1>
		<?php
		$query="SELECT id_alumno, nombre_alumno, apellido_alumno, cedula_alumno from alumno";
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
	
	<br><br><br>	

	<table align="center" border="4" width="80%">
		<tr>
			    <td> ID alumno       </td>
				<td> Nombre Alumno   </td>
				<td> Apellido alumno </td>
				<td> cedula alumno   </td>
		</tr>
		
		
			<?php while($row=$result->fetch_assoc()){ ?>
			
			<tr>
				<td> <?php   echo $row ['id_alumno'];       ?> </td>
				<td> <?php   echo $row ['nombre_alumno'];   ?> </td>
				<td> <?php   echo $row ['apellido_alumno']; ?> </td>
				<td> <?php   echo $row ['cedula_alumno'];   ?> </td>
			</tr>
			
			<?php
			}
			?>
	
		
	<table>
		
</body>
