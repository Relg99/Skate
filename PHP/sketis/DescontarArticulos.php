<?PHP

include 'conexion.php';

$ID_articulo=1;//Id del articulo a restar
$Cantidad=1;//Cantidad a restar
$consulta = mysqli_query($conexion,'SELECT
                                    Cantidad
                                    FROM
                                    producto
                                    WHERE Producto_ID='.$ID_articulo)
or die("Falló la consulta");

$aux=$consulta->fetch_assoc();//guardo la consulta en una variable string
$result=intval($aux['Cantidad']);//cambio la columna cantidad a int
if($result!=0){//si aun hay productos

    $result=$result-$Cantidad; //restale la cantidad de compra
    $update= "UPDATE producto SET Cantidad=$result WHERE Producto_ID=$ID_articulo";//Variable que guarda mi update
    if ($conexion->query($update) === TRUE) {//si el update se ha realizado correctamente
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conexion->error;
    }
}
mysqli_close($conexion);
?>