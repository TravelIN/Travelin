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
				$valido = 1;

				$sql2 = 'INSERT INTO establecimiento (nombre, direccion, descripcion, idUsuario, idTipoEstableci, idCiudad, rutaFotoEstableci, idEstado) 
					VALUES ("'.$nombre.'", "'.$direccion.'", "'.$descripcion.'", "'.$idUsuario.'", "'.$tipoEstablecimiento.'", "'.$ciudad.'", "", 2)';
				
				if(!mysqli_query($db->conectarse(), $sql2)){
				    echo('Ocurrio un error ejecutando el query de insert[' . mysqli_error() . ']');
					//echo('nom= '.$nombre.' , direc= '.$direccion.', desc='.$descripcion.', idus='.$idUsuario.', tipoest='.$tipoEstablecimiento.', ciud='.$ciudad.', prov='.$provincia);
				}else
					{
						$fotoNombre = $_FILES['fileFotoEstableci']['name'];
						$tipoArchivo = $_FILES['fileFotoEstableci']['type'];
			//foreach($_FILES['fileFotoEstableci']['name'] as $imagen=>$Nombre)
			//{

						if($fotoNombre != '')
						{
							if( $tipoArchivo == "image/jpeg" OR $tipoArchivo =="image/gif")
							{
								$Extencion = explode('.' , $fotoNombre);
								//$destino = 'fotoEstablecimiento/Img-'.$idEstableci.'-'.rand(10, 30).'_'.rand(10, 30).'_'.rand(10, 30).'.'.$Extencion[1];
								$destino = 'fotoAnuncio/Img-'.$idEstableci.'.'.$Extencion[1];

								$sql3 = 'SELECT * FROM establecimiento WHERE idUsuario='.$idUsuario.' AND idEstado = 2';
								
								if($consulta=mysqli_query($db->conectarse(), $sql3))
								{
									$Rs = mysqli_fetch_assoc($consulta);
									
									$idEstableciBD = $Rs['idEstableci'];

									if(!(($idEstableciBD < 1) || (is_null($idEstableciBD)) || ($idEstableciBD == '')))
									{
										/*************************************************/
										//$rtOriginal=$_FILES['fileFotoEstableci']['tmp_name'][$imagen];
										
										include 'redimensionar.php';

										$origen=$_FILES['fileFotoEstableci']['tmp_name'];

										//if(copy($_FILES['fileFotoEstableci']['tmp_name'][$imagen] , $destino))

										if(!redimensionarI($origen, 286, 165, $destino))
										{
											$valido =1;
											$sql4 = 'UPDATE establecimiento SET rutaFotoEstableci="'.$destino.'" WHERE
												  idEstableci='.$idEstableciBD.' AND idUsuario='.$idUsuario;

											mysqli_query($db->conectarse(), $sql4);

										}else
											{
												echo('<Li>No se pudo subir la foto: <B>'.$fotoNombre.'</B> </Li>');
											}
									}
								}else
									{
										echo('Ocurrio un error ejecutando la operacion de busqueda de establecimiento [' . mysqli_error() . ']');
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
								$valido = 0;
								/*
								$sql1 = 'UPDATE establecimiento SET nombre="'.$nombre.'", direccion="'.$direccion.'", descripcion="'.$descripcion.'", 
										idTipoEstableci='.$tipoEstablecimiento.', idCiudad='.$ciudad.' 
										WHERE idEstableci='.$idEstableci.' AND idUsuario='.$idUsuario;
								*/
								//echo "lololo";
							}
					}
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
								
								<script>');
						if($fotoNombre != '')
						{
							echo ('confirm_alert2();');
						}
									
						echo ('			window.location="baseCargaPublic.php"
								</script>
								</body></html>');

						//echo ($valido);
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