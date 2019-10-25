<?PHP
include 'conexion.php';
$result=$_SESSION["saldo"];
$vatx=67;
if($result!=0){//si se cuenta con dinero
    $result+=$_SESSION["total"]; //suma el saldo
    $valor=mysqli_query($conexion,'SELECT Saldo from Cuenta WHERE FK_user='.$vatx);
    $Fila=mysqli_fetch_array($valor);
    $res=$Fila["Saldo"]-$_SESSION["total"];
    $dinero= 'UPDATE cuenta SET Saldo='.$res.' WHERE FK_user='.$vatx;// Se guarda el cambio
    $update= 'UPDATE cuenta SET Saldo='.$result.' WHERE FK_user='.$_SESSION["IDPay"];// Se guarda el cambio
    if ($conexion->query($update) === TRUE  && $conexion->query($dinero) === TRUE  ) {
		echo '<script> alert("'.$_SESSION["total"].'"); </script>';
		unset($_SESSION["datos"]);
        unset($_SESSION["total"]);
        /*
        unset($_SESSION['IDPay']);
        unset($_SESSION['CorreoPay']);
        unset($_SESSION['NombrePay']);
        unset($_SESSION['ApellidoPay']);
        */
       header('Location: /Skate/Vistas/skaters/index.html');
    } else {
        echo "F, valio gorro: " . $conexion->error;
    }
    
    mysqli_close($conexion);
}
?>