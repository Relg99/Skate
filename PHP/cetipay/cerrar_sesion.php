<?php
include 'conexion.php';

unset($_SESSION['CorreoPay']);
unset($_SESSION['NombrePay']);
unset($_SESSION['IDPay']);

echo '{"success":true}';
mysqli_close($conexion);

?>
