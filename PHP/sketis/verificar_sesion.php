<?php
include 'conexion.php';

if(isset($_SESSION['Correo'])) {
print '{"success":true,"nombre":"'.$_SESSION['Correo'].'"}';
}else{
print '{"success":false}';

}




mysqli_close($conexion);

?>
