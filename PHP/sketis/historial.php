
<?PHP

include 'conexion.php';
$user=$_SESSION['Correo'];
$consulta = mysqli_query($conexion,'SELECT
                                    historial.PK_historial,
                                    historial.Cantidad,
                                    historial.Fecha,
                                    producto.Precio,
                                    historial.FK_usuario,
									usuario.Nombre,
									producto.Nombre as Name
                                    FROM((
                                    historial inner join usuario
                                    ON historial.FK_usuario=usuario.Usuario_ID and usuario.Correo="'.$user.'")
									inner join producto on historial.FK_prod=producto.Producto_ID)')
or die("Fallo la consulta");

$nfilas=mysqli_num_rows($consulta);
$Fila=mysqli_fetch_array($consulta);
    if($nfilas > 0){
    print '[';
    for ($i=0;$i<$nfilas;$i++){
		$total=$Fila["Precio"]*$Fila["Cantidad"];
        print '{';
        print '"Numero de compra":"'.$Fila["PK_historial"].'",';
        print '"Cliente":"'.$Fila["Nombre"].'",';
        print '"Usuario":"'.$Fila["FK_usuario"].'"';
        print '"Producto":"'.$Fila["Name"].'",';
        print '"Cantidad":"'.$Fila["Cantidad"].'",';
        print '"Precio":"'.$Fila["Precio"].'"';
        print '"Fecha":"'.$Fila["Fecha"].'",';
        print '"Total":"'.$total.'"';
        if($i==$nfilas-1){
        print "}";
        }else{
        print "},";
        }
        $Fila=mysqli_fetch_array($consulta);
}
print "]";
}
mysqli_close($conexion);
?>





