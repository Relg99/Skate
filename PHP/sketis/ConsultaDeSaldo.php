<?PHP

include 'conexionBanco.php';
$costo=20;
$usuario=1;
$can=false;
$consulta = mysqli_query($conexion,'SELECT
                                    Saldo
                                    FROM
                                    Cuenta
                                    WHERE FK_user='.$usuario)
or die("Fallo la consulta");

$aux=$consulta->fetch_assoc();
$saldo=intval($aux['Saldo']);
if($saldo>=$costo){
    $can=true;
    echo $can;
}else{
    echo $can;
}

mysqli_close($conexion);
?>