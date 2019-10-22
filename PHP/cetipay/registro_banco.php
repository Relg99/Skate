<?PHP

include 'conexion.php';
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$correo=$_POST["correo"];
$contraseña=$_POST["contrasena"];
$telefono=$_POST["telefono"];
$confirmar=$_POST["confirmar"];
$estado = false;


$valoresPermitidos="abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ ";
$espacio=" ";
$validarEspacioN=substr($nombre,0,1);
  if($validarEspacioN===$espacio)
  {
    echo '<script src = "../../Vistas/Assets/js/datosEN.js"> </script>';
    return false;
  }
$validarEspacioA=substr($apellido,0,1);
  if($validarEspacioA===$espacio)
  {
    echo '<script src = "../../Vistas/Assets/js/datosEA.js"> </script>';
    return false;
  }
  if (strlen($nombre)<3)
  {
    echo '<script src = "../../Vistas/Assets/js/datosMN.js"> </script>';
    return false;
  }
  if (strlen($apellido)<3)
  {
    echo '<script src = "../../Vistas/Assets/js/datosMA.js"> </script>';
    return false;
  }
  if (strlen($telefono)<10)
  {
    echo '<script src = "../../Vistas/Assets/js/datosMT.js"> </script>';
    return false;
  }
  if (strlen($contraseña)<3)
  {
    echo '<script src = "../../Vistas/Assets/js/datosMCon.js"> </script>';
    return false;
  }
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
    echo'<script>
    alert("Las contraseñas no coinciden");
    window.history.back();
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
            $consulta = mysqli_query($conexion, "insert into usuario (Nombre, Apellido, Telefono, Correo, Contrasena,Ultima_Conexion)
            values ('$nombre', '$apellido', '$telefono', '$correo', '$contraseña',0)")
            or die("Fallo la consulta </br>");
			$consulta = mysqli_query($conexion, 'insert into cuenta (Saldo, FK_user) values(0,LAST_INSERT_ID())')
        or die("Fallo la consulta");
            echo'<script type="text/javascript">
                alert("Has sido registrado");
                window.location.href="/Skate/Vistas/cetipay/index.html";
                </script>';
				
        }

    }
mysqli_close($conexion);
?>
