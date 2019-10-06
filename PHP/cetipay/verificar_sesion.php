<?php
include 'conexion.php';

if(isset($_SESSION['CorreoPay'])) {
print '{"success":true,"nombre":"'.$_SESSION['NombrePay'].'","ID":"'.$_SESSION['IDPay'].'"}';
}else{
print '{"success":false}';

}




mysqli_close($conexion);

?>
