<?PHP
/* 
Este PHP elimina articulos del carrito
*/
require 'carro_crear.php'; //uma webonga ya comentar, vean carro_añadir y carro_crear, con eso deberian entender, sino F
$id = $_POST["id"];
$i=0;
$cuenta=$_SESSION["id"];
for ($k=1;$k<=$cuenta;$k++){
    if($id==$_SESSION["articulo"][$k]){
        $i = $k;
    }
}
if($i!=0){
    $precio= $_POST["precio"];
    $cant = $_POST["cantidad"];
    $cantidad = $_SESSION["cantidad"][$i] - $cant;
    $_SESSION["cantidad"][$i] = $cantidad;
    $total = $_SESSION["total"] - $precio * $cant;
    $_SESSION["total"] = $total;
    $precio = $_SESSION["precio"][$i] - $precio;
    $_SESSION["precio"][$i] = $precio;

    if ($cantidad<=0) {
        $d = $_SESSION["id"]-1;
        $_SESSION["id"]=$d;
        for ($k=$i;$k<$cuenta;$k++){
            $_SESSION["precio"][$k] = $_SESSION["precio"][$k+1];
            $_SESSION["articulo"][$k] = $_SESSION["articulo"][$k+1];
            $_SESSION["cantidad"][$k] = $_SESSION["cantidad"][$k+1];
        }
        unset($_SESSION["articulo"][$cuenta]);
        unset($_SESSION["precio"][$cuenta]);
        unset($_SESSION["cantidad"][$cuenta]);
        unset($_SESSION["articulo"][$cuenta]);
        if($_SESSION["id"]==0)
            unset($_SESSION["total"]);
    }
}
require 'carro_cookie.php';
?>