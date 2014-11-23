<?php
	
	$idEstableci = $_GET['estableci'];

	//echo ($idEstableci);
	session_start();

	include 'coneccion.php';
	
	$db = new Conexion();

	$sql1 = 'UPDATE establecimiento SET idEstado=4 WHERE idEstableci='.$idEstableci;
	
	if(!mysqli_query($db->conectarse(), $sql1))
	{
		    echo('Ocurrio un error ejecutando el query [' . mysqli_error() . ']');
		    //echo('nom= '.$nombre.' , direc= '.$direccion.', desc='.$descripcion.', idus='.$idUsuario.', tipoest='.$tipoEstablecimiento.', ciud='.$ciudad.', prov='.$provincia);
	}else
		{
			echo '<html><head></head><body>';
			echo '<script language="javascript">';
			echo 'window.location="index.php"';
			//echo 'window.location="detalles_publicacion.php"';
			echo '</script>';
			echo '</body></html>';
		}


?>