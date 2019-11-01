<?PHP

session_start();
$urlBackendSkaters="http://localhost/sketisback/";
header("Access-Control-Allow-Origin: localhost");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, UPDATE,OPTIONS");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, X-HTTP-Method-Override,Content-Type");
header("Access-Control-Allow-Credentials: true");

$conexion=mysqli_connect("localhost","root","")
or die("No se puede conectar con el servidor");

mysqli_select_db($conexion, "cetipay")
or die("No se puede conectar a la base de datos.");


?>
