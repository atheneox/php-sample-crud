<?php include ("conexion.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Ingresar materia</title>
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
	
		<h3 align="center">Ingreso de materias</h3>
		<h1 align="center">
				<form align="center" action="gu_materia.php" method="POST">

					<table align="center" border="2">
							<tr> <input type="number" placeholder="id  materia">       </tr> <br>
							<tr> <input type="text"   placeholder="Nombre de materia" name="nombre">   </tr><br>
							<tr> <input type="submit" value="Ingresar">       </tr><br>
					</table>
					
				</form>
		</h1>
		
	</body>
</html>