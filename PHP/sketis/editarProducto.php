<?php
//Agregar el alter table para modificar el producto

include 'conexion.php';

$ID=$_POST['id'];
$Cantidad=$_POST['cantidad'];

$consulta= mysqli_query($conexion, 'UPDATE producto SET Cantidad = "'.$Cantidad.'" WHERE Producto_ID = "'.$ID.'"')
or die("Fallo");
 header('Location: /Skate/Vistas/skaters/articulos.html');

?>