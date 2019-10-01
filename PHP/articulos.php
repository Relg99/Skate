<!DOCTYPE html>
<html lang="en">

<head>
    <title>Datos de la cuenta.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="articulos.css">
    <link href="/Assets/Lato-font/Lato.css" rel="stylesheet">

</head>

<body>
<?PHP
include 'navbar.php';
?>

<div class="header">
    <img alt="portada" id="img_portada" src="Assets/portada_tablas.png">
    <div class="texto_portada"><h1>Tablas</h1></div>
</div>
<div class="navegacion">
    <span class="item-nav" id="nav-tablas">Tablas</span> / <span class="item-nav" id="nav-trucks">Trucks</span> / <span class="item-nav" id="nav-llantas">Llantas</span>
</div>

<div class="articulos">


<?PHP

$conexion=mysqli_connect("localhost","root","")
or die("No se puede conectar con el servidor");

mysqli_select_db($conexion, "skaters")
or die("No se puede conectar a la base de datos.");



$consulta = mysqli_query($conexion,'SELECT
                                    producto.Nombre,
                                    producto.Foto,
                                    producto.Modelo,
                                    producto.Precio
                                    FROM
                                    producto
                                    WHERE Cantidad>0 && Articulo_FK=3')
or die("Fallo la consulta");

$nfilas=mysqli_num_rows($consulta);
$Fila=mysqli_fetch_array($consulta);
if($nfilas > 0){

for ($i=0;$i<$nfilas;$i++){
print ' <div class="articulo">
               <img class="articulo-img" src="'.$Fila['Foto'].'" alt="Bonita patineta">
               <div class="articulo-texto">
                   '.$Fila['Nombre'].'
               </div>
               <span >$'.$Fila['Precio'].'</span>
               <div class="icono-carrito"> <img alt="shopping" src="Assets/icons/baseline_shopping_cart_black_18dp.png" class="shopping-icon">        <span class="tooltipcarrito">Agregar al carrito</span>
               </div>
           </div>';
$Fila=mysqli_fetch_array($consulta);

}
}
mysqli_close($conexion);
?>





</div>
</body>

</html>





