<?php

include 'conexion.php';

$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$modelo = $_POST["modelo"];
$cantidad = $_POST["cantidad"];
$precio = $_POST["precio"];
$marca = $_POST["marca"];
$articulo=$_POST["articulo"];
$valFK;
$articuloFK;

$target_path = "../../Vistas/Assets/bd/";
$target_path = $target_path . basename( $_FILES['imagenGuardada']['name']);

    if(move_uploaded_file($_FILES['imagenGuardada']['tmp_name'], $target_path)) {
        $linkImagen = basename( $_FILES['imagenGuardada']['name']);
    }
        else{
            echo "Ha ocurrido un error, trate de nuevo!";
        }

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
"insert into producto (Marca_FK, Articulo_FK, Cantidad, Nombre, Foto, Modelo, Descripcion, Precio)
values ('$valFK', '$articuloFK', '$cantidad', '$nombre', '$linkImagen', '$modelo', '$descripcion', '$precio')")
or die ("Error en consulta");

echo '
<html>
    <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Skaters - ok</title>
            <link rel="shortcut icon" href="../../Vistas/Assets/icons/logo_header.png" />
            <script>
                    function r() { location.href="../../Vistas/skaters/registo-articulos.html"}
                    setTimeout ("r()", 3200);
                    </script>
            <style>
            body{
                background-color: #00d27b;
                }
            .okimage{
                display:block;
                margin-left: auto;
                margin-right: auto;
                margin-top: 200px;
                height: 200px;
                width: 200px;
            }
            .texto{
                text-align: center;
                font: oblique bold 120% cursive;
                font-size: 200%;
                color: #FFF;
            }
            </style>
    </head>
    <body>
        <tr>
            <td> <img class="okimage" src="../../Vistas/Assets/icons/ok_icon.png"/> </td>
            <td><p class="texto">Producto registrado con exito! - seras redireccionado automaticamente....</p></td>
        </tr>
    </body>
</html>
';

    mysqli_close($conexion);
?>
