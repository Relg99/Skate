<?php
/**
 * author Liloth00814
 */

include ('sketis/conexion.php');

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
        <title>Skaters - Redireccion</title>
        <link rel="shortcut icon" href="../../Vistas/Assets/icons/logo_header.png" />
        <p style="color:#FFFF";> No ingresaste la misma contraseña en ambos campos, intentalo de nuevo....</p>
            <script>
            function r() { location.href="../Vistas/skaters/registro-almacenista.html"} 
            setTimeout ("r()", 2700);
            </script>
        </head>
        <body style="background-color:#494949;">
        </body>
    </html>
    ';
}

else{
    $cuentaFilas = mysqli_query($conexion, "select Usuario_ID from usuario") or die ("Fallo la consulta uno");
    $nUsuario=mysqli_num_rows($cuentaFilas) + 1;

    $verificaCorreo = mysqli_query($conexion, "select Correo from usuario") or die ("Fallo en la consulta correo");
    $verifica=mysqli_fetch_array($verificaCorreo);

    $consulta = mysqli_query($conexion, "insert into usuario (Usuario_ID, Tipo_FK, Nombre, Apellido, Correo, Contrasena)
    values ('$nUsuario', '3', '$nombre', '$apellido', '$correo', '$contraseña')")
    or die("Fallo la consulta </br>");

    $nUsuario=mysqli_num_rows($cuentaFilas) + 1;
    for ($i = 1; $i <= $nUsuario; $i ++){
        if ($correo == $verifica["Correo"]){
            $estado = true;
            echo '
    <html>
        <head>
        <title>Skaters - Redireccion</title>
        <link rel="shortcut icon" href="../../Vistas/Assets/icons/logo_header.png" />
        <p style="color:#FFFF";> El correo ya esta registrado en el sistema....</p>
            <script>
            function r() { location.href="../Vistas/skaters/registro-almacenista.html"} 
            setTimeout ("r()", 2700);
            </script>
        </head>
        <body style="background-color:#494949;">
        </body>
    </html>
            ';
            $borrarIncorrectos = mysqli_query($conexion, "delete from usuario where Usuario_ID = '$nUsuario'") or die ("fallo al borrar rep");
        }
        $verifica=mysqli_fetch_array($verificaCorreo);
    } 
    if ($estado == false){
        echo '
        <html>
            <head>
            <title>Skaters - Redireccion</title>
            <link rel="shortcut icon" href="../../Vistas/Assets/icons/logo_header.png" />
            <p style="color:#FFFF";>Redireccionando a Login..</p>
                <script>
                function r() { location.href="../Vistas/skaters/login.html"} 
                setTimeout ("r()", 2700);
                </script>
            </head>
            <body style="background-color:#494949;">
            </body>
        </html>
        ';
    }
}
mysqli_close($conexion);
?>