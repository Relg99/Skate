<?php
include 'conexion.php';
	$update = mysqli_query($conexion,'update usuario set Ultima_Conexion=0 where Correo="'.$_SESSION['CorreoPay'].'"')
          or die("Fallo la consulta");

unset($_SESSION['Ultima_ConexionPay']);
unset($_SESSION['CorreoPay']);
unset($_SESSION['NombrePay']);
unset($_SESSION['IDPay']);

echo '{"success":true}';
mysqli_close($conexion);

?>
