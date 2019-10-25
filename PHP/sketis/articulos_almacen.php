
<?PHP

include 'conexion.php';

//Lista articulos almacen

$consulta = mysqli_query($conexion,'select producto.Producto_ID as id, articulo.Nombre as tipo, producto.Nombre as nombre, 
producto.Modelo as modelo, producto.Descripcion as descripcion, producto.Foto as foto, producto.Cantidad AS cantidad
 FROM articulo INNER JOIN producto 
ON producto.Articulo_FK = articulo.Articulo_ID;')
or die("Fallo la consulta");

$nfilas=mysqli_num_rows($consulta);
$Fila=mysqli_fetch_array($consulta);
    if($nfilas > 0){
    echo '[';
    for ($i=0;$i<$nfilas;$i++){
        echo '{';
        echo '"id":"'.$Fila["id"].'",';
        echo '"tipo":"'.$Fila["tipo"].'",';
        echo '"nombre":"'.$Fila["nombre"].'",';
        echo '"modelo":"'.$Fila["modelo"].'",';
        echo '"descripcion":"'.$Fila["descripcion"].'",';
        echo '"foto":"'.$Fila["foto"].'",';
        echo '"cantidad":"'.$Fila["cantidad"].'"';
        if($i==$nfilas-1){
        echo "}";
        }else{
        echo "},";
        }
        $Fila=mysqli_fetch_array($consulta);
}
echo "]";
}
mysqli_close($conexion);
?>







