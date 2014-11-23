<?php 
	//session_destroy();
	session_start();

	include 'coneccion.php';
	
	$db = new Conexion();

	$idUsuario = $_SESSION['idUsuario'];
	//$idUsuario = 2;
	$nombre = $_POST['nombre'];
	$direccion = $_POST['direccion'];
	$descripcion = $_POST['descripcion'];
	$tipoEstablecimiento = $_POST['tipoEstablecimiento'];
	$provincia = $_POST['ddlProvinciaP'];
	$ciudad	= $_POST['ddlCiudadP'];

/*	$email = $_POST['usuario'];
	$pass = $_POST['contrasenia'];
	
	include 'coneccion.php';
	$db = new Conexion();
/*
	$db = new mysqli($dbServidor, $dbUsuario, $dbPassword, $dbAUsar);

	if($db->connect_errno > 0){
	    die('Imposible conectar [' . $db->connect_error . ']');
	    //echo 'Imposible conectar';
	}
*/	 
	
	$sql = 'INSERT INTO establecimiento (nombre, direccion, descripcion, idUsuario, idTipoEstableci, idCiudad, idEstado) 
		VALUES ("'.$nombre.'", "'.$direccion.'", "'.$descripcion.'", "'.$idUsuario.'", "'.$tipoEstablecimiento.'", "'.$ciudad.'", 1)';
	
	if(!mysqli_query($db->conectarse(), $sql)){
	    //echo('Ocurrio un error ejecutando el query [' . mysqli_error() . ']');
	    echo('nom= '.$nombre.' , direc= '.$direccion.', desc='.$descripcion.', idus='.$idUsuario.', tipoest='.$tipoEstablecimiento.', ciud='.$ciudad.', prov='.$provincia);
	}else
		{
			//mysqli_close($db);	//WARNING

			echo '<html><head></head><body>';
			echo '<script language="javascript">';
			echo 'window.location="index.php"';
			//echo 'window.location="detalles_publicacion.php"';
			echo '</script>';
			echo '</body></html>';

		}




/*

	if(!$resultado = mysqli_query($db->conectarse(), $sql)){
	    die('Ocurrio un error ejecutando el query [' . mysqli_error() . ']');
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
				mysqli_close($db);
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
						
						mysqli_close($db);

						//echo 'logueado!!';
						echo '<html><head></head><body>';
						echo '<script language="javascript">';
						echo 'window.location="busqueda.php"';
						echo '</script>';
						echo '</body></html>';
					}
				}
		}

	mysqli_close($db);
*/
?>