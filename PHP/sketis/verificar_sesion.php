<?php
include 'conexion.php';
if(isset($_SESSION['Correo'])) {

if( ((time()-$_SESSION['Ultima_Conexion']) / 60 % 60 ) >5 ){

unset($_SESSION['Ultima_Conexion']);
unset($_SESSION['Correo']);
unset($_SESSION['Cuenta']);
unset($_SESSION['Nombre']);
print '{"success":false}';


}else{
		$_SESSION['Ultima_Conexion']=time();
    print '{"success":true,"nombre":"'.$_SESSION['Nombre'].'","tipo":'.$_SESSION['Cuenta'].'}';
	  $update = mysqli_query($conexion,'update usuario set Ultima_Conexion='.time().'
  	where Correo="'.$_SESSION['Correo'].'"') or die("Fallo la consulta");
          }
}else{
print '{"success":false}';

}




mysqli_close($conexion);

?>
