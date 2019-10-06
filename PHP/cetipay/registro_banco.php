<?php
include 'conexion.php';
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
     $telefono = $_POST['telefono'];
    $contrasena = $_POST['contrasena'];
    $confirmar = $_POST['confirmar'];
    if ($contrasena != $confirmar){
    print '{"success":false}';
}
    $consulta = mysqli_query($conexion, 'insert into usuario (Nombre, Apellido, Correo,Telefono, Contrasena)
        values ( "'.$nombre.'", "'.$apellido.'", "'.$correo.'","'.$telefono.'", "'.$contrasena.'" )')
        or die("Fallo la consulta");

$consulta = mysqli_query($conexion, 'insert into cuenta (Saldo, FK_user) values(0,LAST_INSERT_ID())')
        or die("Fallo la consulta");
    print '{"success":true}';

$conexion->close();
?>
