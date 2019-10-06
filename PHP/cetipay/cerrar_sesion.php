<?php
include 'conexion.php';

unset($_SESSION['CorreoPay']);
unset($_SESSION['NombrePay']);
unset($_SESSION['IDPay']);

session_destroy();
echo '{"success":true}';
mysqli_close($conexion);

?>
