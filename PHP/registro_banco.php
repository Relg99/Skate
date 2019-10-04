<?php
include ('sketis/conexionBanco.php');
$nombre;
$apellido;
$correo;
$contraseña;

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $confirmar = $_POST['confirmar'];
    $nUsuario=2;
    $consulta = mysqli_query($conexion, "insert into usuarios (Nombre, Apellido, Correo, Contraseña, PK_usuarios)
        values ( '$nombre', '$apellido', '$correo', '$contraseña', '$nUsuario')");

$conexion->close();
?>