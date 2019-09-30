<?PHP

$conexion=mysqli_connect("localhost","root","")
or die("No se puede conectar con el servidor");

mysqli_select_db($conexion, "skate")
or die("No se puede conectar a la base de datos.");


$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$correo=$_POST["correo"];
$contraseña=$_POST["contrasena"];


$consulta = mysqli_query($conexion,'insert into Usuario (Nombre, Apellido, Correo, Contraseña) 
values ("'.$nombre.'", "'.$apellido.'", "'.$correo.'",  aes_encrypt("'.$contraseña.'", "'.$_SESSION['secret'].'"));')
or die("Fallo la consulta");

echo 'Success!';

mysqli_close($conexion);
?>