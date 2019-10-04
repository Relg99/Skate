<?php

$conexion=mysqli_connect("localhost","root","")
or die("No se puede conectar con el servidor");
mysqli_select_db($conexion, "banco")
or die("No se puede conectar a la base de datos.");

$usuarioBD = mysqli_query($conexion, 'SELECT cuenta.Saldo, usuarios.Nombre, usuarios.Apellido, usuarios.Correo FROM cuenta INNER JOIN usuarios ON cuenta.FK_user = usuarios.PK_usuarios WHERE cuenta.Correo=$_SESSION')
or die("Se Realizó un Fallo");
$nfilas=mysqli_num_rows($usuarioBD);
$Fila=mysqli_fetch_array($usuarioBD);
    if($nfilas > 0){
    print '[';

        print '{';
        print '"Saldo":"'.$Fila["Saldo"].'",';
        print '"Nombre":"'.$Fila["Nombre"].'",';
        print '"Apellido":"'.$Fila["Apellido"].'",';
        print '"Correo":"'.$Fila["Correo"].'"';
        print "}";
        $Fila=mysqli_fetch_array($usuarioBD);

print "]";
}
mysqli_close ($conexion);
?> 
