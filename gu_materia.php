<?php include ("conexion.php"); ?>

<?php 
   $n=@$_POST[nombre];
   
   $query = "INSERT INTO materia(nombre_materia) VALUES ('$n')";
   $rs=$mysqli->query($query);
   
   header("Location: /test/i_materia.php");
?>