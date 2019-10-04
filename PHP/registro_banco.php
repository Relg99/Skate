<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "banco(1)";
$nombre;
$apellido;
$correo;
$contraseña;

$conexion = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
if (isset($_POST['nombre']) && $_POST['apellido'] && $_POST['correo'] && $_POST['contraseña']){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    aes_encrypt("contraseña",".SESSION['secret'].");
    $contraseña = $_POST['contraseña'];

    $sql = "INSERT INTO usuarios (nombre, apellido, correo, contraseña)
    VALUES ($nombre, $apellido, $correo, $contraseña)";
}


if ($conexion->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conexion->close();
?>
