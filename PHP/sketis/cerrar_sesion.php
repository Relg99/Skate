<?php
include 'conexion.php';

unset($_SESSION['Correo']);
unset($_SESSION['Cuenta']);
unset($_SESSION['Nombre']);

echo '{"success":true}';
mysqli_close($conexion);

?>
