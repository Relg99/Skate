<?PHP
session_start();
if (!isset($_SESSION["total"]) ) {
    $_SESSION["total"] = 0;
    $_SESSION["id"] = 0;
    for ($i=0; $i<100; $i++) {
      $_SESSION["cantidad"][$i] = 0;
      $_SESSION["precio"][$i] = 0;
    }
}
$i=1;
if (isset($_POST['reset']) )
 {
   unset($_SESSION["cantidad"]);
   unset($_SESSION["precio"]);
   unset($_SESSION["total"]);
   unset($_SESSION["articulo"]);
   $_SESSION["id"]=0;
   $total=0;
 }

if (isset($_POST["Add"]) )
   {
   $id = $_POST["Add"];
   $i = $_SESSION["id"]+1;
   $cuenta=$_SESSION["id"];
   $_SESSION["id"]=$i;
   for ($k=1;$k<=$cuenta;$k++){
     if($id==$_SESSION["articulo"][$k]){
      $i = $k;
      $d = $_SESSION["id"]-1;
      $_SESSION["id"]=$d;
      break;
     }
   }
   $precio = $_POST["Precio"];
   $cantidad = $_SESSION["cantidad"][$i] + 1;
   $_SESSION["precio"][$i] = $precio * $cantidad;
   $_SESSION["articulo"][$i] = $id;
   $_SESSION["cantidad"][$i] = $cantidad;
   $total = $_SESSION["total"] + $precio;
   $_SESSION["total"] = $total;
}

if (isset($_POST["delete"]) )
   {
   $id = $_POST["delete"];
   $i=0;
   $cuenta=count($_SESSION["id"]);
   for ($k=0;$k<$cuenta;$k++){
    if($id==$_SESSION["articulo"][k]){
     $i = $k;
    }
   }
   if (!isset($_SESSION["cantidad"][$i])) {
    $_SESSION["cantidad"][$i] = 0;
    $_SESSION["precio"][$i] = 0;
   }
   $precio = $_POST["Precio"];
   $cantidad = $_SESSION["cantidad"][$i];
   $cantidad--;
   $_SESSION["cantidad"][$i] = $cantidad;
   $total = $_SESSION["total"] - $precio;
   $_SESSION["total"] = $total;
   //remove item if quantity is zero
   if ($cantidad == 0 || $cantidad<0) {
    $_SESSION["precio"][$i] = 0;
    $i = $_SESSION["id"]-1;
    unset($_SESSION["articulo"][$i]);
  }

}
$total = $_SESSION["total"];
  print '{"Total":"'.$total.'"}';
?>