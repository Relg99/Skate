<?PHP

include 'conexion.php';
$costo=20;
$can=false;
$consulta = mysqli_query($conexion,'SELECT
                                    Saldo
                                    FROM
                                    Cuenta
                                    WHERE FK_user='.$_SESSION['IDPay'])
or die("Fallo la consulta");

$aux=$consulta->fetch_assoc();
$saldo=intval($aux['Saldo']);
$_SESSION["saldo"]=$saldo;
print $saldo;

mysqli_close($conexion);
?>
