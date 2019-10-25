<?PHP
/*
Este PHP inicializa las $_SESSION (sesiones) del carrito
Una $_SESSION es basicamente una cookie que se borra cuando cierras el navegador
*/
session_start(); //iniciamos las sesiones, esto tiene que estar siempre que se van a utilizar
if (!isset($_SESSION["total"]) ) {
    if(isset($_COOKIE["datos"])){ //busca si hay una cookie del carrito, esta se guarda en el PHP de carro_guardar,si la encuentra inicializa el carrito con lo almacenado en la cookie
      $datos = json_decode($_COOKIE["datos"], true); 
      if(isset($datos["cantidad"]))
      $_SESSION["cantidad"] = $datos["cantidad"];
      if(isset($datos["precio"]))
      $_SESSION["precio"] = $datos["precio"];
      $_SESSION["total"] = $datos["total"];
      if(isset($datos["articulo"]))
      $_SESSION["articulo"] = $datos["articulo"];
      $_SESSION["id"] = $datos["id"];
    }
    else{ //si no hay cookie, solo inicializa las sesiones del total y la de id, ya que las otras se inicializan al momento de añadir articulos al carrito
    $_SESSION["total"] = 0;
    $_SESSION["id"] = 0;
  }
}
?>