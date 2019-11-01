<?php
include 'conexion.php';

$codigo = $_POST["codigo"];
$usuario= $_SESSION['IDPay'];
if (isset ($codigo)){
$rest = substr ($codigo, 0, 3);
}
if (is_numeric($rest))
{
    $consulta= mysqli_query($conexion, 'select saldo from cuenta where FK_user='.$usuario)
    or die ("Fallo la consulta");
    $total=$rest;
    while ($row = mysqli_fetch_array ($consulta)){
        $total = $total + $row['saldo'];
    }
        $sql = mysqli_query ($conexion, 'update cuenta set Saldo ="' .$total.'" where FK_user='.$usuario);
       print '{"success":true}';
    
    }else
{
    print '{"success":false}';
    
}
$conexion->close();
?>