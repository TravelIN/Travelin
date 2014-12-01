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
	$fotoNombre = $_FILES['fileFotoEstableci']['name'];
	$tipoArchivo = $_FILES['fileFotoEstableci']['type'];
	//foreach($_FILES['fileFotoEstableci']['name'] as $imagen=>$fotoNombre)
	//{

		if($fotoNombre != '')
		{
			if( $tipoArchivo == "image/jpeg" OR $tipoArchivo =="image/gif")
			{
				$Extencion = explode('.' , $fotoNombre);
				//$destino = 'fotoEstablecimiento/Img-'.$idEstableci.'-'.rand(10, 30).'_'.rand(10, 30).'_'.rand(10, 30).'.'.$Extencion[1];
				$destino = 'fotoAnuncio/Img-'.$idEstableci.'.'.$Extencion[1];
/**** un if x si id es nulo **/
				if(!(($idEstableci < 1) || (is_null($idEstableci)) || ($idEstableci == '')))
				{			
					include 'redimensionar.php';

					$origen=$_FILES['fileFotoEstableci']['tmp_name'];

					if(!redimensionarI($origen, 286, 165, $destino))
					{
						$valido = 1;
						$sql1 = 'UPDATE establecimiento SET nombre="'.$nombre.'", direccion="'.$direccion.'", descripcion="'.$descripcion.'", 
								idTipoEstableci='.$tipoEstablecimiento.', idCiudad='.$ciudad.', rutaFotoEstableci="'.$destino.'" 
								WHERE idEstableci='.$idEstableci.' AND idUsuario='.$idUsuario;

						mysqli_query($db->conectarse(), $sql1);
						//echo "lululu";
					//if(copy($_FILES['fileFotoEstableci']['tmp_name'][$imagen] , $destino))
					//if(copy($_FILES['fileFotoEstableci']['tmp_name'] , $destino))
					//{
					}else
						{
							echo('<Li>No se pudo subir la foto: <B>'.$fotoNombre.'</B> </Li>');
						}
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
				$sql1 = 'UPDATE establecimiento SET nombre="'.$nombre.'", direccion="'.$direccion.'", descripcion="'.$descripcion.'", 
						idTipoEstableci='.$tipoEstablecimiento.', idCiudad='.$ciudad.' 
						WHERE idEstableci='.$idEstableci.' AND idUsuario='.$idUsuario;
				//echo "lololo";
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
				//echo "lalalal";
				//echo ($valido);
			}
	}else
		{
			
			echo ('<html><head>
						<script type="text/javascript">
							function confirm_alert2()
							{
								alert("Ocurrió un error en la operación.");
							}
						</script>
					</head><body>
					
					<script>
						confirm_alert2();
						window.location="baseCargaPublic.php"
					</script>
					</body></html>');

			//echo ($valido);
		}

?>