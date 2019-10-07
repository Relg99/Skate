<?php

include 'conexion.php'; 

$Usuario_ID =$_POST['number'];
$ID_Borrar;

$consulta= mysqli_query($conexion,'SELECT usuario_ID FROM usuario WHERE Tipo_FK = 3')
or die("Fallo");

$nfilas=mysqli_num_rows($consulta);
$Fila=mysqli_fetch_array($consulta);

if($nfilas > 0){
    for ($i=0;$i<$Usuario_ID+1;$i++){
        $ID_Borrar = $Fila['usuario_ID'];
        $Fila=mysqli_fetch_array($consulta);
}
}

mysqli_query($conexion,'DELETE FROM usuario WHERE Usuario_ID = '.$ID_Borrar.';')
or die("Fallo");

mysqli_close ($conexion);
?>
