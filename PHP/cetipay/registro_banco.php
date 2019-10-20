<?PHP

include 'conexion.php';
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$correo=$_POST["correo"];
$contraseña=$_POST["contrasena"];
$telefono=$_POST["telefono"];
$confirmar=$_POST["confirmar"];
$estado = false;


$valoresPermitidos="abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";

for ($i=0; $i<strlen($nombre); $i++)
{
  if(strpos($valoresPermitidos,substr($nombre,$i,1))===false)
  {
    echo '<script src = "../../Vistas/Assets/js/datosIN.js"> </script>';
    return false;
  }
}
 for ($i=0; $i<strlen($apellido); $i++)
  {
    if(strpos($valoresPermitidos,substr($apellido,$i,1))===false)
    {
        echo '<script src = "../../Vistas/Assets/js/datosIA.js"> </script>';
      return false;
    }
  }

if ($contraseña != $confirmar){
    echo'<script">
    alert("Las contraseñas no coinciden");
    </script>';
}
else{

    $verificaCorreo = mysqli_query($conexion, "select Correo from usuario") or die ("Fallo en la consulta correo");
    $verifica=mysqli_fetch_array($verificaCorreo);
    $numero = mysqli_num_rows($verificaCorreo);

    for ($i = 0; $i <= $numero; $i++){
        if ($correo == $verifica["Correo"]){
            $estado = true;
        }
        $verifica=mysqli_fetch_array($verificaCorreo);
    }
        if ($estado){ //Si se encontro un correo igual en la base de datos (No permitir registro).
            echo'<script>
                alert("Ese correo ya esta registrado");
                </script>';
        }
        else { //Si no se encontro correo igual, permite el registro.
            $consulta = mysqli_query($conexion, "insert into usuario (Nombre, Apellido, Telefono, Correo, Contrasena)
            values ('$nombre', '$apellido', '$telefono', '$correo', '$contraseña')")
            or die("Fallo la consulta </br>");
            echo'<script type="text/javascript">
                alert("Has sido registrado");
                window.location.href="/Skate/Vistas/cetipay/index.html";
                </script>';
        }

    }
mysqli_close($conexion);
?>
