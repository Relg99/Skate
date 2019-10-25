<?PHP
/*
Este PHP borra todo lo del carrito
*/
session_start();
if(isset($_SESSION["cantidad"])) //verifica que exista la sesion, esto para cada una de las sesiones
    unset($_SESSION["cantidad"]); //se usa unset para borrar completamente la sesion con el nombre de cantidad
if(isset($_SESSION["precio"]))
    unset($_SESSION["precio"]);
if(isset($_SESSION["total"]))
    unset($_SESSION["total"]);
if(isset($_SESSION["articulo"]))
    unset($_SESSION["articulo"]);
$_SESSION["id"]=0; //la de id solo las ponemos en 0, por que si la borramos se bugea jeje
if(isset($_COOKIE["datos"]))
    unset($_COOKIE["datos"]); //borramos la cookie del carrito
?>