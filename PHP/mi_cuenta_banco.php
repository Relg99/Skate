<?php
include 'conexion.php'; 
$usuarioBD = mysqli_query($conexion, 'SELECT cuenta.Saldo, usuarios.Nombre, usuarios.Apellido, usuarios.Correo FROM cuenta INNER JOIN usuarios ON cuenta.FK_user = usuarios.PK_usuarios')
or die("Se Realizó un Fallo");
$nfilas=mysqli_num_rows($consulta);
$Fila=mysqli_fetch_array($consulta);
    if($nfilas > 0){
    print '[';
    for ($i=0;$i<$nfilas;$i++){
        print '{';
        print '"Saldo":"'.$Fila["Saldo"].'",';
        print '"Nombre":"'.$Fila["Nombre"].'",';
        print '"Apellido":"'.$Fila["Apellido"].'"';
        print '"Correo":"'.$Fila["Correo"].'"';
        if($i==$nfilas-1){
        print "}";
        }else{
        print "},";
        }
        $Fila=mysqli_fetch_array($consulta);
}
print "]";
}
mysqli_close ($conexion);
?> 
