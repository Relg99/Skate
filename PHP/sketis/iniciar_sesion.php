<?php
include 'conexion.php';

$tiempo=time();
				if (isset($_POST['correo']) && isset($_POST['contrasena'])){

					$mail=$_POST["correo"];
					$pass=$_POST["contrasena"];
					$consulta = mysqli_query($conexion,'SELECT * FROM usuario where Correo="'.$mail.'" && Contrasena="'.$pass.'"')
          or die("Fallo la consulta");

          $nfilas=mysqli_num_rows($consulta);
          $Fila=mysqli_fetch_array($consulta);
						if ($nfilas==1){
						                       //Checar cuando fue la ultima interaccion con esa cuenta
							if( ( (($tiempo-$Fila["Ultima_Conexion"]) / 60 % 60) <5) ||(($tiempo-$Fila["Ultima_Conexion"]) / 60 % 60)===0){
       							echo'{"success":false,"mensaje":"ACTIVA"}';
       							       }else{
							$_SESSION['Correo']= $mail;
							$_SESSION['Cuenta']= $Fila['Tipo_FK'];
							$_SESSION['Nombre']=$Fila['Nombre'];
							$_SESSION['Apellido']=$Fila['Apellido'];
							$consulta = mysqli_query($conexion,'UPDATE usuario set Ultima_Conexion='.$tiempo.' where Correo="'.$_SESSION['Correo'].'"')
									  or die("Fallo la consulta3");
					
		  
							
						
							echo'{"success":true}';
							}

						}else{
							echo'{"success":false}';
						}

				}else{
					echo "Por favor, llena todos los campos.";
				}


mysqli_close($conexion);

?>
