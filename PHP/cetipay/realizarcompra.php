<?PHP
include 'conexion.php';

$result=$_SESSION["saldo"];
if($result!=0){//si se cuenta con dinero
    $result-=$_SESSION["total"]; //resta el saldo
    $update= 'UPDATE cuenta SET Saldo='.$result.' WHERE FK_user='.$_SESSION["IDPay"];// Se guarda el cambio
    if ($conexion->query($update) === TRUE) {
        echo "Yeah perdonen";
        unset($_SESSION["datos"]);
        unset($_SESSION["total"]);
        unset($_SESSION['IDPay']);
        unset($_SESSION['CorreoPay']);
        unset($_SESSION['NombrePay']);
        unset($_SESSION['ApellidoPay']);
        header('Location: /Skate/PHP/sketis/completar.php');
    } else {
        echo "F, valio gorro: " . $conexion->error;
    }
    mysqli_close($conexion);
}
?>