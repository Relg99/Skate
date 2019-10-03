<?php
include 'conexion.php';

unset($_SESSION['Correo']);
unset($_SESSION['Cuenta']);
unset($_SESSION['Nombre']);

session_destroy();
echo '{"success":true}';
mysqli_close($conexion);

?>
