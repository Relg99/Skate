<?php
    $server="localhost";
    session_start();
    $json = $_REQUEST['data'];
    $datos = json_decode($json, true);
    $_SESSION["datos"] = $datos;
    $cuenta=count($_SESSION["datos"]);
    for($i=0; $i<$cuenta; $i++){
        $_SESSION["datos"][$i]["ID"]=$i;
    }
    $_SESSION["total"] = $datos[0]["Total"];
    header('Location: /Skate/Vistas/cetipay/login-compra.html');
?>
