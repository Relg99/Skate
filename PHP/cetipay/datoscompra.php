<?PHP
include 'conexion.php';

$bool=false;

if(isset($_SESSION["datos"])){
    $json_data = json_encode($_SESSION["datos"]);
    print $json_data;
}
?>