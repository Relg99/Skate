<?PHP
session_start();
if (!isset($_SESSION["total"]) ) {
    $_SESSION["total"] = 0;
    for ($i=0; $i<100; $i++) {
     $_SESSION["cantidad"][$i] = 0;
    $_SESSION["precio"][$i] = 0;
   }
}

if (isset($_POST['reset']) )
 {
   unset($_SESSION["cantidad"]);
   unset($_SESSION["precio"]);
   unset($_SESSION["total"]);
   unset($_SESSION["articulo"]);
 }

if (isset($_POST["Add"]) )
   {
   $i = $_POST["Add"];
   $precio = $_POST["Precio"];
   $cantidad = $_SESSION["cantidad"][$i] + 1;
   $_SESSION["precio"][$i] = $precio * $cantidad;
   $_SESSION["articulo"][$i] = $i;
   $_SESSION["cantidad"][$i] = $cantidad;
   $total = $_SESSION["total"] + $precio;
   $_SESSION["total"] = $total;
   
}

if (isset($_POST["delete"]) )
   {
   $i = $_POST["delete"];
   $precio = $_POST["Precio"];
   $cantidad = $_SESSION["cantidad"][$i];
   $cantidad--;
   $_SESSION["cantidad"][$i] = $cantidad;
   $total = $_SESSION["total"] - $precio;
   $_SESSION["total"] = $total;
   //remove item if quantity is zero
   if ($cantidad == 0) {
    $_SESSION["precio"][$i] = 0;
    unset($_SESSION["articulo"][$i]);
  }
  }
  $out = $_SESSION["total"];
  print '{"Total":"'.$out.'"}';
?>