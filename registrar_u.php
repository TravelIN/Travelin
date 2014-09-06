<?php 
	session_destroy();
	session_start();

	$nombre = $_POST['nombre'];
	$email = $_POST['mail'];
	$pass = $_POST['regContrasenia'];
		
	include 'coneccion.php';

	$db = new mysqli($dbServidor, $dbUsuario, $dbPassword, $dbAUsar);

	if($db->connect_errno > 0){
	    die('Imposible conectar [' . $db->connect_error . ']');
	    //echo 'Imposible conectar';
	}

 
	$sql = 'SELECT * FROM usuario WHERE email="'.$email.'"';
	 
	if(!$resultado = $db->query($sql)){
	    die('Ocurrio un error ejecutando el query para ver si ya existe el mail [' . $db->error . ']');
	    //echo 'Ocurrio un error ejecutando el query';
	}
	
	$cantResultados = $resultado->num_rows;
	if($cantResultados >= 1)
	{
		die('El mail usado ya esta registrado.');
		//echo 'Datos malos, hay mas de un registro con esos datos.';
	}else
		{
			$sql = 'INSERT INTO usuario (nombre, email, password) VALUES ("'.$nombre.'", "'.$email.'", "'.$pass.'")';
 
			if(! $db->query($sql)){
			     die('Ocurrio un error ejecutando el query [' . $db->error . ']');
			}
			 
			//echo 'Filas Insertadas: '.$db->affected_rows;
		}

	$db->close();

/*
	echo '<html><head></head><body>';
	echo '<script language="javascript">';
	echo 'window.location="index.php"';
	//echo 'window.location="detalles_publicacion.php"';
	echo '</script>';
	echo '</body></html>';
*/
	
?>