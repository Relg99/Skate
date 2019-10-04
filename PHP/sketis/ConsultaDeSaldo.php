<?PHP

include 'conexionBanco.php';
$costo=666667;
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
}
mysqli_close($conexion);
?>