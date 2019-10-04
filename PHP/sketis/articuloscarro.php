
<?PHP

include 'conexion.php';
if(isset($_SESSION["articulo"])){
$consulta = mysqli_query($conexion,'SELECT
                                    producto.Producto_ID,
                                    producto.Nombre,
                                    producto.Foto,
                                    producto.Modelo,
                                    producto.Precio
                                    FROM
                                    producto')
or die("Fallo la consulta");
$actual=-1;
$nfilas=mysqli_num_rows($consulta);
$Fila=mysqli_fetch_array($consulta);
    if($nfilas > 0){
    print '[';
    for ($i=0;$i<$nfilas;$i++){
        if(isset($_SESSION["articulo"][$i])){
        $actual = $_SESSION["articulo"][$i];
        }
        else
        $actual=-1;
        if($i==$actual){
        print '{';
        print '"ID":"'.$Fila["Producto_ID"].'",';
        print '"Nombre":"'.$Fila["Nombre"].'",';
        print '"Foto":"'.$Fila["Foto"].'",';
        print '"Modelo":"'.$Fila["Modelo"].'",';
        print '"Cantidad":"'.$_SESSION["cantidad"][$i].'",';
        print '"Total":"'.$_SESSION["total"].'",';
        print '"Precio":"'.$Fila["Precio"].'"';
        if($i==$nfilas-1){
        print "}";
        }else{
        print "},";
        }
        $Fila=mysqli_fetch_array($consulta);
    }
}
print "]";
}
mysqli_close($conexion);
}
?>





