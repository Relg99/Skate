<?php
include 'conexion.php';
$tiempo=time();
if(isset($_SESSION['CorreoPay'])) {

	$consulta = mysqli_query($conexion,'SELECT * FROM usuario where Correo="'.$_SESSION['CorreoPay'].'"')
          or die("Fallo la consulta");
 $Fila=mysqli_fetch_array($consulta);
 
if( (($tiempo-$Fila['Ultima_Conexion']) / 60 % 60 ) >5 ){

unset($_SESSION['Correo']);
unset($_SESSION['Cuenta']);
unset($_SESSION['Nombre']);
print '{"success":false}';


}else{
	
print '{"success":true,"nombre":"'.$_SESSION['NombrePay'].'","ID":"'.$_SESSION['IDPay'].'"}';
 $update = mysqli_query($conexion,'update usuario set Ultima_Conexion='.$tiempo.' where Correo="'.$_SESSION['CorreoPay'].'"') or die("Fallo la consulta");
}

}else{
print '{"success":false}';

}




mysqli_close($conexion);

?>
