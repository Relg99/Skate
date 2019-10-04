<?php
//include 'conexion.php'; 

$conexion=mysqli_connect("localhost","root","")
or die("No se puede conectar con el servidor");

mysqli_select_db($conexion, "banco")
or die("No se puede conectar a la base de datos.");

$usuarioBD = mysqli_query($conexion, 'SELECT cuenta.Saldo, usuarios.Nombre, usuarios.Apellido, usuarios.Correo FROM cuenta INNER JOIN usuarios ON cuenta.FK_user = usuarios.PK_usuarios')
or die("Se detecto un Fallo");

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
