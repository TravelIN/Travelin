<?php 
	session_destroy();
	session_start();

	$email = $_POST['usuario'];
	$pass = $_POST['contrasenia'];
	
	include 'coneccion.php';

	$db = new mysqli($dbServidor, $dbUsuario, $dbPassword, $dbAUsar);

	if($db->connect_errno > 0){
	    die('Imposible conectar [' . $db->connect_error . ']');
	    //echo 'Imposible conectar';
	}
	 
	$sql = 'SELECT * FROM usuario WHERE email="'.$email.'" and password="'.$pass.'"';
	 
	if(!$resultado = $db->query($sql)){
	    die('Ocurrio un error ejecutando el query [' . $db->error . ']');
	    //echo 'Ocurrio un error ejecutando el query';
	}
	
	$cantResultados = $resultado->num_rows;
	if($cantResultados > 1)
	{
		die('Datos malos, hay mas de un registro con esos datos.');
		//echo 'Datos malos, hay mas de un registro con esos datos.';
	}else
		{
			if($cantResultados != 1)
			{
				die('No se encontró un registro con esos datos.');
				//echo 'No se encontró un registro con esos datos.';
				echo '<html><head></head><body>';
				echo '<script language="javascript">';
				echo 'window.location="error.php"';
				echo '</script>';
				echo '</body></html>';
			}else
				{
					if($cantResultados == 1)
					{
						$fila = $resultado->fetch_assoc();
						
						$_SESSION['idUsuario'] = $fila['idUsuario'];
						$_SESSION['nick'] = $fila['nick'];
						$_SESSION['fotoPerfil'] = $fila['nombreFotoPerfil'];
								
						//echo 'logueado!!';
						echo '<html><head></head><body>';
						echo '<script language="javascript">';
						echo 'window.location="busqueda.php"';
						echo '</script>';
						echo '</body></html>';
					}
				}
		}

	$db->close();

?>