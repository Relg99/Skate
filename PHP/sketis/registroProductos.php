<?php

include 'conexion.php';

$id_producto = $_POST["confirmar"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$modelo = $_POST["modelo"];
$cantidad = $_POST["cantidad"];
$precio = $_POST["precio"];
$marca = $_POST["marca"];
$articulo=$_POST["articulo"];
$valFK;
$articuloFK;

switch ($marca){
    case "Antifashion":
        $valFK = 1;
        break;
    case "Santa Cruz":
        $valFK = 2;
        break;
    case "Vans":
        $valFK = 3;
        break;
    case "Plan B":
        $valFK = 8;
        break;
    case "Spitfire":
        $valFK = 5;
        break;
    case "Independent":
        $valFK = 6;
        break;
    case "Dexlix":
        $valFK = 4;
        break;
    case "Deathwish":
        $valFK = 9;
        break;
    case "Hysteria":
        $valFK = 10;
        break;
    case "Krux":
        $valFK = 11;
        break;
    case "Vulkan":
        $valFK = 12;
        break;
    case "VEnture":
        $valFK = 13;
        break;
    case "Thunder":
        $valFK = 14;
        break;
}

switch ($articulo){
    case "Llantas":
        $articuloFK = 1;
        break;
    case "Trucks":
        $articuloFK = 2;
        break;
    case "Tablas":
        $articuloFK = 3;
        break;
}

$consulta = mysqli_query($conexion, 
"insert into producto (Producto_ID, Marca_FK, Articulo_FK, Cantidad, Nombre, Modelo, Descripcion, Precio)
values ('$id_producto', '$valFK', '$articuloFK', '$cantidad', '$nombre', '$modelo', '$descripcion', '$precio' )" )
or die ("Fallo al realizar la consulta.");

echo '
    <html>
        <head>
            <title>Skaters - Redireccion</title>
            <link rel="shortcut icon" href="../../Vistas/Assets/icons/logo_header.png" />
            <p style="color:#FFFF";>Se agrego con exito el nuevo producto.... </br>
            Espere un momento, estas siendo redireccionado....</p>
                <script>
                    function r() { location.href="../../Vistas/skaters/index.html"} 
                    setTimeout ("r()", 3000);
                </script>
        </head>
        <body style="background-color:#494949;">
        </body>
    </html>
';

    mysqli_close($conexion);
?>