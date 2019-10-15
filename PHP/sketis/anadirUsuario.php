<?PHP

/**
 * @ author deadchri5
 */

include 'conexion.php';

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$correo=$_POST["correo"];
$contraseña=$_POST["contraseña"];
$confirmar=$_POST["confirmar"];
$estado = false;

if ($contraseña != $confirmar){
    echo '
    <html>
    <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Skaters - Status</title>
            <link rel="shortcut icon" href="../../Vistas/Assets/icons/logo_header.png" />
            <script>
                    function r() { location.href="../../Vistas/skaters/registro.html"} 
                    setTimeout ("r()", 2700);
                    </script>
            <style>
            body{
                background-color: #ef7979;
                }
            .okimage{
                display:block;
                margin-left: auto;
                margin-right: auto;
                margin-top: 200px;
                height: 200px;
                width: 200px;
            }
            .texto{
                text-align: center;
                font: oblique bold 120% cursive;
                font-size: 200%;
                color: #FFF;
            }
            </style>
    </head>
    <body>
        <tr>
            <td> <img class="okimage" src="../../Vistas/Assets/icons/err_icon.png"/> </td>
            <td><p class="texto">Error: la contraseña no es igual en ambos campos </br> seras redireccionado automaticamente....</p></td>
        </tr>
    </body>
</html>
    ';
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
            echo '
            <html>
    <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Skaters - Status</title>
            <link rel="shortcut icon" href="../../Vistas/Assets/icons/logo_header.png" />
            <script>
                    function r() { location.href="../../Vistas/skaters/registro.html"} 
                    setTimeout ("r()", 3500);
                    </script>
            <style>
            body{
                background-color: #ef7979;
                }
            .okimage{
                display:block;
                margin-left: auto;
                margin-right: auto;
                margin-top: 200px;
                height: 200px;
                width: 200px;
            }
            .texto{
                text-align: center;
                font: oblique bold 120% cursive;
                font-size: 200%;
                color: #FFF;
            }
            </style>
    </head>
    <body>
        <tr>
            <td> <img class="okimage" src="../../Vistas/Assets/icons/err_icon.png"/> </td>
            <td><p class="texto">Error: El correo que ingresaste ya existe en el sistema
             </br> seras redireccionado automaticamente....</p></td>
        </tr>
    </body>
</html>
            ';
        }
        else { //Si no se encontro correo igual, permite el registro.
            $consulta = mysqli_query($conexion, "insert into usuario (Tipo_FK, Nombre, Apellido, Correo, Contrasena)
            values ('1', '$nombre', '$apellido', '$correo', '$contraseña')")
            or die("Fallo la consulta </br>");

            echo '
        <html>
    <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Skaters - Status</title>
            <link rel="shortcut icon" href="../../Vistas/Assets/icons/logo_header.png" />
            <script>
                    function r() { location.href="../../Vistas/skaters/login.html"} 
                    setTimeout ("r()", 2700);
                    </script>
            <style>
            body{
                background-color: #00d27b;
                }
            .okimage{
                display:block;
                margin-left: auto;
                margin-right: auto;
                margin-top: 200px;
                height: 200px;
                width: 200px;
            }
            .texto{
                text-align: center;
                font: oblique bold 120% cursive;
                font-size: 200%;
                color: #FFF;
            }
            </style>
    </head>
    <body>
        <tr>
            <td> <img class="okimage" src="../../Vistas/Assets/icons/ok_icon.png"/> </td>
            <td><p class="texto">Te has registrado de manera exitosa! Gracias por formar parte de skaters.</br> seras redireccionado automaticamente....</p></td>
        </tr>
    </body>
</html>
        ';
        }

    }
mysqli_close($conexion);
?>