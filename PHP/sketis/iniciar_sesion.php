<?php
include 'conexion.php';


				if ($_POST['correo']!="" && $_POST ['contrasena']!=""){

					$mail=$_POST["correo"];
					$pass=$_POST["contrasena"];
					$consulta = mysqli_query($conexion,'SELECT * FROM usuario where Correo="'.$mail.'" && Contrasena="'.$pass.'"')
          or die("Fallo la consulta");

          $nfilas=mysqli_num_rows($consulta);
          $Fila=mysqli_fetch_array($consulta);


						if ($nfilas==1){
							$_SESSION['Correo']= $mail;
							$_SESSION['Cuenta']= $Fila['Tipo_FK'];
              $_SESSION['Nombre']=$Fila['Nombre'];
							echo'{"success":true}';
						}else{
							echo'{"success":false}';
						}

				}else{
					echo "Por favor, llena todos los campos.";
				}


mysqli_close($conexion);

?>
