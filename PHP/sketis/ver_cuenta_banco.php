<?php

include 'conexion.php'; 




$usuarioBD = mysqli_query($conexion, 'SELECT cuenta.saldo, cuenta.PK_pago, usuarios.Nombre, usuarios.Apellido FROM cuenta INNER JOIN usuarios ON cuenta.FK_user = usuarios.PK_usuarios')
or die("Fallo1");

$nfilas=mysqli_num_rows($consulta);
$Fila=mysqli_fetch_array($consulta);
    if($nfilas > 0){
    print '[';
    for ($i=0;$i<$nfilas;$i++){
        print '{';
        print '"Numero de cuenta":"'.$Fila["PK_pago"].'",';
        print '"Nombre":"'.$Fila["nombre"].'",';
        print '"Apellido":"'.$Fila["saldo"].'"';
        if($i==$nfilas-1){
        print "}";
        }else{
        print "},";
        }
        $Fila=mysqli_fetch_array($consulta);
}
print "]";
}


?>
