<?php 
	//session_destroy();
	//session_start();

	//include 'coneccion.php';
	
	$db = new Conexion();

	$idUsuario = $_SESSION['idUsuario'];
	
	$sql = 'SELECT E.*, C.idProvincia AS provincia FROM establecimiento E INNER JOIN ciudad C ON E.idCiudad=C.id 
			WHERE idUsuario = '.$idUsuario.' AND E.idEstado = 2 LIMIT 1';

	
	if(!$resultado = mysqli_query($db->conectarse(), $sql)){
	    echo('Ocurrio un error ejecutando el query [' . mysqli_error() . ']');
	    //echo('nom= '.$nombre.' , direc= '.$direccion.', desc='.$descripcion.', idus='.$idUsuario.', tipoest='.$tipoEstablecimiento.', ciud='.$ciudad.', prov='.$provincia);
	}else
		{
			$cantResultados = $resultado->num_rows;
			if($cantResultados == 0)
			{
				echo('Usted no ha creado un anuncio antes.');
				
			}else
				{
					if($cantResultados > 1)
					{
						echo('Posee mas de un anuncio (solo 1 se permite)');
					}else
						{
							$fila = $resultado->fetch_assoc();

							$idEstableci = $fila['idEstableci'];
							$nombre = $fila['nombre'];
							$direccion = $fila['direccion'];
							$descripcion = $fila['descripcion'];
							$tipoEstablecimiento = $fila['idTipoEstableci'];
							$ciudad	= $fila['idCiudad'];
							$urlFoto = $fila['rutaFotoEstableci'];
							$estado = $fila['idEstado'];

							$provincia = $fila['provincia'];
						}
				}
		}

?>