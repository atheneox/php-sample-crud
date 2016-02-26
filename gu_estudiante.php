<?php include ("conexion.php"); ?>

<?php 

$n=@$_POST[nombre];
$a=@$_POST[apellido];
$c=@$_POST[cedula];

$query = "INSERT INTO alumno(nombre_alumno, apellido_alumno, cedula_alumno)VALUES ('$n','$a','$c')";

$rs=$mysqli->query($query);

header("Location: /test/i_estudiante.php");

?>

