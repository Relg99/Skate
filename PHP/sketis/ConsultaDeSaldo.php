<?PHP

include 'conexionBanco.php';

$usuario=1;
$consulta = mysqli_query($conexion,'SELECT
                                    Saldo
                                    FROM
                                    Cuenta
                                    WHERE FK_user='.$usuario)
or die("Fallo la consulta");

$nfilas=mysqli_num_rows($consulta);
$Fila=mysqli_fetch_array($consulta);
    if($nfilas > 0){
    print '[';
    for ($i=0;$i<$nfilas;$i++){
        print '{';       
        print '"Saldo":"'.$Fila["Saldo"].'"';
        if($i==$nfilas-1){
        print "}";
        }else{
        print "},";
        }
        $Fila=mysqli_fetch_array($consulta);
}
print "]";
}
mysqli_close($conexion);
?>