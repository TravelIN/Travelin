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


	$sql1 = 'SELECT COUNT(1) AS cantActivos FROM establecimiento WHERE idUsuario='.$idUsuario.' AND idEstado = 2';

	if(!$cant = mysqli_query($db->conectarse(), $sql1))
	{
		echo('Ocurrio un error ejecutando el query [' . mysqli_error() . ']');
	}else
		{
			$activos = mysqli_fetch_assoc($cant);
			//$cantResultados = $resultado->num_rows;

			if($activos['cantActivos'] == 0)
			{	
				$sql2 = 'INSERT INTO establecimiento (nombre, direccion, descripcion, idUsuario, idTipoEstableci, idCiudad, idEstado) 
					VALUES ("'.$nombre.'", "'.$direccion.'", "'.$descripcion.'", "'.$idUsuario.'", "'.$tipoEstablecimiento.'", "'.$ciudad.'", 2)';
				
				if(!mysqli_query($db->conectarse(), $sql2)){
				    echo('Ocurrio un error ejecutando el query de insert[' . mysqli_error() . ']');
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
			}else
				{
					echo '<script language="javascript">';
					echo 'alert("Ya posee un anuncio activo(solo 1 se permite)");';
					echo '</script>';
					echo '<html><head></head><body>';
					echo '<script language="javascript">';
					echo 'window.location="index.php"';
					echo '</script>';
					echo '</body></html>';
				}
		}

?>