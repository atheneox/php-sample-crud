<?php include ("conexion.php"); ?>

<!DOCTYPE html>
<!--Sentencias SQL-->
<?php
		$id_alumno =("SELECT id_alumno,nombre_alumno from alumno");
		$result1 = $mysqli->query($id_alumno);
		$id_materia =("SELECT id_materia,nombre_materia from materia");
		$result2 = $mysqli->query($id_materia);
?>

<html>

<head>
	<title>Ingresar notas</title>
</head>
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
	
	
	
		<h3 align="center">Ingreso de notas</h3>
		<h1 align="center">
		<form method="post" action="gu_nota.php">
		
		<!--Select para mostrar Alumno-->
		<SELECT name="alumno">	
		<?php
			while($row=mysqli_fetch_assoc($result1))
			{?>
                <option value="<?php echo $row['id_alumno']; ?>"> <?php   echo $row['nombre_alumno'];?> </option>
			<?php
			}
		 ?>
	    </SELECT>
		<br>
		
		<!--Select para mostrar Materias-->
		<SELECT name="materia">
		<?php
			while($row=mysqli_fetch_assoc($result2))
			{?>
                <option value="<?php echo $row['id_materia']; ?>"> <?php   echo $row['nombre_materia'];?> </option>
			<?php
			}
		 ?>
		</SELECT>
		<br>
		
		<!--Ingresar nota-->
		<input type="number" name="nota">
		<br>
		
		<input type="submit" value="Insertar nota">
		<br>
		<form>
		
		<br><br>
		
		</h1>
	
	</body>
</html>