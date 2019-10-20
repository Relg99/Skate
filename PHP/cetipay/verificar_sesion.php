<?php
include 'conexion.php';

if(isset($_SESSION['CorreoPay'])) {

if( ((time()-$_SESSION['Ultima_ConexionPay']) / 60 % 60 ) >5 ){

unset($_SESSION['Ultima_ConexionPay']);
unset($_SESSION['Correo']);
unset($_SESSION['Cuenta']);
unset($_SESSION['Nombre']);
print '{"success":false}';


}else{
		$_SESSION['Ultima_ConexionPay']=time();
print '{"success":true,"nombre":"'.$_SESSION['NombrePay'].'","ID":"'.$_SESSION['IDPay'].'"}';
 $update = mysqli_query($conexion,'update usuario set Ultima_Conexion='.time().'
  	where Correo="'.$_SESSION['CorreoPay'].'"') or die("Fallo la consulta");
}

}else{
print '{"success":false}';

}




mysqli_close($conexion);

?>
