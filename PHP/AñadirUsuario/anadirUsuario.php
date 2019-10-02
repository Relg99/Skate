<?PHP

$conexion=mysqli_connect("localhost","root","")
or die("No se puede conectar con el servidor");

mysqli_select_db($conexion, "skaters")
or die("No se puede conectar a la base de datos.");


$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$correo=$_POST["correo"];
$contraseña=$_POST["contraseña"];
$confirmar=$_POST["confirmar"];

if ($contraseña != $confirmar){
    echo 'Verifica la contraseña';
    header('Location: ../../../../sketis/Skate/Vistas/skaters/registro.html');
}

else{
    $cuentaFilas = mysqli_query($conexion, "select Usuario_ID from usuario") or die ("Fallo la consulta uno");
    $nUsuario=mysqli_num_rows($cuentaFilas) + 1;

    $consulta = mysqli_query($conexion, "insert into usuario (Usuario_ID, Tipo_FK, Nombre, Apellido, Correo, Contrasena)
    values ('$nUsuario', '1', '$nombre', '$apellido', '$correo', '$contraseña')")
    or die("Fallo la consulta");

    echo 'Registro Finalizado!';
}

mysqli_close($conexion);
?>