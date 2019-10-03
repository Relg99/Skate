<?PHP

/**
 * @ author deadchri5
 */
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
    header('Location: ../../../../Skate/Skate/Vistas/skaters/registro.html');
}
else{
    $cuentaFilas = mysqli_query($conexion, "select Usuario_ID from usuario") or die ("Fallo la consulta uno");
    $nUsuario=mysqli_num_rows($cuentaFilas) + 1;

    $verificaCorreo = mysqli_query($conexion, "select Correo from usuario") or die ("Fallo en la consulta correo");
    $verifica=mysqli_fetch_array($verificaCorreo);

    $consulta = mysqli_query($conexion, "insert into usuario (Usuario_ID, Tipo_FK, Nombre, Apellido, Correo, Contrasena)
    values ('$nUsuario', '1', '$nombre', '$apellido', '$correo', '$contraseña')")
    or die("Fallo la consulta </br>");

    $nUsuario=mysqli_num_rows($cuentaFilas) + 1;
    for ($i = 1; $i <= $nUsuario; $i ++){
        if ($correo == $verifica["Correo"]){
            echo 'Error (666). El correo ya esta registrado en el sistema.';
            $borrarIncorrectos = mysqli_query($conexion, "delete from usuario where Usuario_ID = '$nUsuario'") or die ("fallo al borrar rep");
        }
        $verifica=mysqli_fetch_array($verificaCorreo);
    }
    
}
mysqli_close($conexion);
?>