<?PHP
/*
Este PHP crea una cookie del carro, ver carro_crear para que se den una idea
*/
$datos = array(); //si no sabes que es esto, te presento www.google.com
if(isset($_SESSION["cantidad"]))
    $datos["cantidad"] = $_SESSION["cantidad"];
if(isset($_SESSION["precio"]))
    $datos["precio"] = $_SESSION["precio"];
$datos["total"] = $_SESSION["total"];
if(isset($_SESSION["articulo"]))
    $datos["articulo"] = $_SESSION["articulo"];
$datos["id"] = $_SESSION["id"];
setcookie("datos",json_encode($datos),time()+(24*60*60)); //crea la cookie con un json de todos los datos, que dure 24*60*60 horas ahi hacen la operacion
?>