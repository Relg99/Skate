<?php

include 'conexion.php'; 


$Usuario_ID =$_POST["id"];

$usuarioBD = mysqli_query($conexion, 'DELETE FROM `usuario` WHERE `usuario`.`Usuario_ID` = "'.$Usuario_ID.'"')
or die("Fallo1");




	
?>
