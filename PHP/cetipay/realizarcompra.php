<?PHP
include 'conexion.php';

$result=$_SESSION["saldo"];
$vatx=67;
if($result!=0){//si se cuenta con dinero
    $result-=$_SESSION["total"]; //resta el saldo
    $valor=mysqli_query($conexion,'SELECT Saldo from Cuenta WHERE FK_user='.$vatx);
    $Fila=mysqli_fetch_array($valor);
    $res=$_SESSION["total"]+$Fila["Saldo"];
    $dinero= 'UPDATE cuenta SET Saldo='.$res.' WHERE FK_user='.$vatx;// Se guarda el cambio
    $update= 'UPDATE cuenta SET Saldo='.$result.' WHERE FK_user='.$_SESSION["IDPay"];// Se guarda el cambio
    if ($conexion->query($update) === TRUE  && $conexion->query($dinero) === TRUE  ) {
        unset($_SESSION["datos"]);
        unset($_SESSION["total"]);
        /*
        unset($_SESSION['IDPay']);
        unset($_SESSION['CorreoPay']);
        unset($_SESSION['NombrePay']);
        unset($_SESSION['ApellidoPay']);
        */
       header('Location: /Skate/PHP/sketis/completar.php');
    } else {
        echo "F, valio gorro: " . $conexion->error;
    }
    
    mysqli_close($conexion);
}
?>
