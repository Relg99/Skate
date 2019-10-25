<?PHP
/*
Este PHP añade articulos al carrito
*/
require 'carro_crear.php'; //llamamos el carro_crear, basicamente que revise si existe el carrito antes de añadir productos
$id = $_POST["id"]; //la id del articulo
$i = $_SESSION["id"]+1; //se le añade uno al total de articulos
$cuenta=$_SESSION["id"]; //el total anterior de articulos
$_SESSION["id"]=$i; //se iguala al nuevo total
for ($k=1;$k<=$cuenta;$k++){ //este for revisa todos los articulos del carrito para ver si ya esta en este
    if($id==$_SESSION["articulo"][$k]){ //si encuentra el articulo asigna los valores para la parte de abajo
        $i = $k; //la posicion del articulo en el carrito
        $d = $_SESSION["id"]-1; //se resta 1 al total de articulos
        $_SESSION["id"]=$d; //se iguala al nuevo total 
        break; //estoy comentando todo alchile por que sino me tiran caca, esta madre es para salirse del for
    }
}
$precio = $_POST["precio"]; //se recibe el valor de precio
if(!isset($_SESSION["cantidad"][$i])) //checa que no exista cantidad, para inicializar esa sesion con 0
    $_SESSION["cantidad"][$i]=0;
$cantidad = $_SESSION["cantidad"][$i] + 1; //se le suma uno jaja
$_SESSION["precio"][$i] = $precio * $cantidad; //el precio total (precio * cantidad) del mismo producto
$_SESSION["articulo"][$i] = $id; //la id jaja
$_SESSION["cantidad"][$i] = $cantidad; //cuantos hay
$total = $_SESSION["total"] + $precio; //se le suma al total de TODO el carrito
$_SESSION["total"] = $total; //se le asigna el valor a la sesion ajajaj
require 'carro_cookie.php';
?>