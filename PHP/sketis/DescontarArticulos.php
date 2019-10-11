<?PHP

include 'conexion.php';
if(isset($_SESSION["articulo"])){
$articulos=array_values(array_filter($_SESSION["articulo"]));
$cantidades=array_values(array_filter($_SESSION["cantidad"]));
for($k=0; $k<count($_SESSION["articulo"]); $k++){
$ID_articulo=$articulos[$k];//Id del articulo a restar
$Cantidad=$cantidades[$k];//Cantidad a restar
$succesfully=false;
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
        $succesfully=true;
        echo $update;
        echo "YEEEAH";
    }
    else{
        echo "fuck";
    }
}
}
unset($_SESSION["cantidad"]);
unset($_SESSION["precio"]);
unset($_SESSION["total"]);
unset($_SESSION["articulo"]);
unset($_COOKIE["datos"]);
$_SESSION["id"]=0;
$total=0;
}
mysqli_close($conexion);
?>