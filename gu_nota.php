<?php include ("conexion.php"); ?>

<?php 
   $al=@$_POST[alumno];
   $ma=@$_POST[materia];
   $ca=@$_POST[nota];
   
   $query = "INSERT INTO calificacion_alumno(id_alumno,id_materia,calificacion) VALUES ('$al','$ma','$ca')";
   
   $rs=$mysqli->query($query);
   header("Location: /test/i_nota.php");
?>