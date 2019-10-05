<?PHP
include 'conexionBanco.php';

$ID_pago=1;//Id del pago
$Costo=1;//Costo a restar
$consulta = mysqli_query($conexion,'SELECT
                                    Saldo
                                    FROM
                                    cuenta
                                    WHERE PK_pago='.$ID_pago)
or die("Falló la consulta");

$aux=$consulta->fetch_assoc();
$result=intval($aux['Saldo']);
if($result!=0){//si se cuenta con dinero
    $result-=$_POST["total"]; //resta el saldo
    $update= "UPDATE cuenta SET Saldo=$result WHERE PK_pago=$ID_pago";// Se guarda el cambio
    if ($conexion->query($update) === TRUE) {
        echo "Yeah perdonen";
    } else {
        echo "F, valio gorro: " . $conexion->error;
    }
}
mysqli_close($conexion);
?>