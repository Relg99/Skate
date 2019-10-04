
<?php

$conexion=mysqli_connect("localhost","root","")
or die("No se puede conectar con el servidor");

mysqli_select_db($conexion, "skaters")
or die("No se puede conectar a la base de datos.");

   $consulta=mysqli_query($conexion,'SELECT usuario.Nombre, usuario.Apellido, usuario.Correo,
   FROM usuario WHERE usuario.Correo='.$_SESSION['Correo'])
   or die("Fallo la consulta");

   print '[';
   print '{';
   print '"Nombre":"'.$_SESSION["Nombre"].'",';
   print '"Apellido":"'.$_SESSION["Apellido"].'",';
   print '"Correo":"'.$_SESSION["Correo"].'"';
   print "}";
   print "]";

  mysqli_close($conexion);
?>