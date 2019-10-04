
<?PHP

include 'conexion.php';

$ID_compra=1;//Id de la compra
$Costo=1;//Costo a restar
$consulta = mysqli_query($conexion,'SELECT
                                    Cantidad
                                    FROM
                                    carrito
                                    WHERE Carrito_ID='.$ID_compra)
or die("Falló la consulta");
$nfilas=mysqli_num_rows($consulta);
if($nfilas!=0){//si se cuenta con un producto dentro del carrito
    $borrado= "DELETE from carrito  WHERE Carrito_ID=$ID_compra";// Se guarda el cambio
    if ($conexion->query($borrado) === TRUE) {
        echo "Qchau";
    } else {
        echo "F, valio gorro: " . $conexion->error;
    }
}else{
        echo "No existe el carro crack";
}
mysqli_close($conexion);
?>