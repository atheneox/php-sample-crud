<?php include ("conexion.php"); ?>       <!--Importacion de la clase  de conexion-->

<!DOCTYPE html>
<html>
<head>
	<title>Ingresar estudiante</title>
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
	
	<h3 align="center">Ingreso de estudiantes</h3>
	<h1 align="center">
			<form align="center" method="POST" action="gu_estudiante.php" name="i_estudiante">
				<table align="center" border="2">
						<tr> <input type="number" placeholder="id"         name="id">       </tr> <br>
						<tr> <input type="text"   placeholder="Nombre"     name="nombre">   </tr><br>
						<tr> <input type="text"   placeholder="Apellido"   name="apellido"> </tr><br>
						<tr> <input type="text"   placeholder="Cedula"     name="cedula">   </tr> <br>
						<tr> <input type="submit" value="Ingresar">                         </tr><br>
				</table>
			</form>
	</h1>


	</body>
</html>