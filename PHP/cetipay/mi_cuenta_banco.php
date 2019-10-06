<?php

include 'conexion.php';

$usuarioBD = mysqli_query($conexion, 'SELECT
                                      usuario.Nombre,
                                      usuario.Apellido,
                                      usuario.Telefono,
                                      usuario.Correo,
                                      cuenta.Saldo
                                      FROM
                                      usuario
                                      INNER JOIN cuenta ON cuenta.FK_user = usuario.PK_usuarios
                                      WHERE cuenta.FK_user='.$_SESSION['IDPay'])
or die("Falló la consulta");
$nfilas=mysqli_num_rows($usuarioBD);
$Fila=mysqli_fetch_array($usuarioBD);
    if($nfilas > 0){
    print '[';

        print '{';
        print '"Saldo":"'.$Fila["Saldo"].'",';
        print '"Nombre":"'.$Fila["Nombre"].'",';
        print '"Apellido":"'.$Fila["Apellido"].'",';
        print '"Telefono":"'.$Fila["Telefono"].'",';
        print '"Correo":"'.$Fila["Correo"].'"';
        print "}";
        $Fila=mysqli_fetch_array($usuarioBD);

print "]";
}
mysqli_close ($conexion);
?>
