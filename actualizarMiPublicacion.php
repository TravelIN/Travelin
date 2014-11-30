<?php 
	//session_destroy();
	session_start();

	include 'coneccion.php';
	
	$db = new Conexion();

	$idUsuario = $_SESSION['idUsuario'];
	//$idUsuario = 2;
	$idEstableci = $_POST['idEstableci'];
	$nombre = $_POST['nombre'];
	$direccion = $_POST['direccion'];
	$descripcion = $_POST['descripcion'];
	$tipoEstablecimiento = $_POST['tipoEstablecimiento'];
	//$provincia = $_POST['ddlProvinciaP'];
	$ciudad	= $_POST['ddlCiudadP'];
/*****************************************************************/


	$valido = 1;
/*****************************************************************/
	$Nombre = $_FILES['fileFotoEstableci']['name'];
	$tipoArchivo = $_FILES['fileFotoEstableci']['type'];
	//foreach($_FILES['fileFotoEstableci']['name'] as $imagen=>$Nombre)
	//{

		if($Nombre != '')
		{
			if( $tipoArchivo == "image/jpeg" OR $tipoArchivo =="image/gif")
			{
				$Extencion = explode('.' , $Nombre);
				//$Destino = 'fotoEstablecimiento/Img-'.$idEstableci.'-'.rand(10, 30).'_'.rand(10, 30).'_'.rand(10, 30).'.'.$Extencion[1];
				$Destino = 'fotoEstablecimiento/Img-'.$idEstableci.'.'.$Extencion[1];

				//if(copy($_FILES['fileFotoEstableci']['tmp_name'][$imagen] , $Destino))
				if(copy($_FILES['fileFotoEstableci']['tmp_name'] , $Destino))
				{
					$valido = 1;
					$sql1 = 'UPDATE establecimiento SET nombre="'.$nombre.'", direccion="'.$direccion.'", descripcion="'.$descripcion.'", idTipoEstableci='.$tipoEstablecimiento.', idCiudad='.$ciudad.', rutaFotoEstableci="'.$Destino.'" WHERE idEstableci='.$idEstableci.' AND idUsuario='.$idUsuario;

				}else
					{
						echo('<Li>No se pudo subir el archivo: <B>'.$Nombre.'</B> </Li>');
					}
			}else
				{
					$valido = 0;
					echo ('<html><head>
								<script type="text/javascript">
									function confirm_alert()
									{
										alert("Tu archivo tiene que ser JPG o GIF. Otros archivos no son permitidos.");
									}
								</script>
							</head><body>
							
							<script>
								confirm_alert();
								window.location="baseCargaPublic.php"
							</script>
							</body></html>');

					//echo ($valido);
				}

		}else
			{
				$valido = 1;
				$sql1 = 'UPDATE establecimiento SET nombre="'.$nombre.'", direccion="'.$direccion.'", descripcion="'.$descripcion.'", idTipoEstableci='.$tipoEstablecimiento.', idCiudad='.$ciudad.' WHERE idEstableci='.$idEstableci.' AND idUsuario='.$idUsuario;
			}
	//}
	if($valido == 1)
	{
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
				
				//echo ($valido);
			}
	}else
		{
			
			echo '<html><head></head><body>';
			echo '<script language="javascript">';
			//echo 'alert("Tu archivo tiene que ser JPG o GIF. Otros archivos no son permitidos")';
			echo 'window.location="index.php"';
			echo '</script>';
			echo '</body></html>';

			//echo ($valido);
		}

?>