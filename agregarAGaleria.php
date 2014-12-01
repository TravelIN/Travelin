<?php 
	
	session_start();

	include 'coneccion.php';
	
	$db = new Conexion();

	if(isset($_SESSION['idUsuario']))
	{
		$idUsuario = $_SESSION['idUsuario'];
	}else
		{
			$idUsuario = 0;
		}

	//640x480
	$lugar=$_POST['lugarP'];

	//echo $lugar;

	foreach($_FILES['fotoNueva']['name'] as $imagen=>$fotoNombre)
	{
		//if($_FILES['fotoNueva']['name'] != '')
		if($_FILES['fotoNueva']['name'][$imagen] != '')
		{
			//$fotoNombre = $_FILES['fotoNueva']['name'];
			//$tipoArchivo = $_FILES['fotoNueva']['type'];
			$tipoArchivo = $_FILES['fotoNueva']['type'][$imagen];
			//echo "nombre no vacio  - ".$tipoArchivo;

			if( $tipoArchivo == "image/jpeg" OR $tipoArchivo =="image/gif")
			{
/******* validar con un IF que todos los datos del nombre tenagn algo  *************/
				//echo "imagen valida";
				$fecha = date('d-m-Y_H_i_s');
				$aleatorio = rand(0, 100);
				$extencion = explode('.' , $fotoNombre);
					//$destino = 'fotoEstablecimiento/Img-'.$idEstableci.'-'.rand(10, 30).'_'.rand(10, 30).'_'.rand(10, 30).'.'.$Extencion[1];
				$nuevoNombre = 'Img-'.$idUsuario.'-'.$lugar.'-'.$fecha.'-'.$aleatorio.'.'.$extencion[1];
				$destino1 = 'galeriaEstablecimiento/'.$nuevoNombre;
				$destino2 = 'galeriaEstablecimiento/miniaturas/'.$nuevoNombre;

				if(!(($lugar < 1) || (is_null($lugar)) || ($lugar == '')))
				{			
					include 'redimensionar.php';

					//$origen = $_FILES['fotoNueva']['tmp_name'];
					$origen1 = $_FILES['fotoNueva']['tmp_name'][$imagen];
					$origen2 = $destino1;

					//if(!((redimensionarI($origen1, 640, 480, $destino1)) && (redimensionarI($origen2, 146, 110, $destino2))))
					if(!(redimensionarI($origen1, 640, 480, $destino1)))
					{
						if(!(redimensionarI($origen2, 146, 110, $destino2)))
						{
							//$valido = 1;
							$sql1 = 'INSERT INTO fotoestableci (nombre, nombreFotoEstableci, idEstableci) VALUES("", "'.$nuevoNombre.'", "'.$lugar.'")';

							mysqli_query($db->conectarse(), $sql1);
							//echo "lululu";
						//if(copy($_FILES['fileFotoEstableci']['tmp_name'][$imagen] , $destino))
						//if(copy($_FILES['fileFotoEstableci']['tmp_name'] , $destino))
						//{

							echo ('<html><head>
										<script type="text/javascript">
											function confirm_alert3()
											{
												alert("Todo bien.");
											}
										</script>
									</head><body>
									
									<script>
										/*confirm_alert3();*/
										window.location="baseFotosAnuncio.php?lugar='.$lugar.'"
									</script>
									</body></html>');
						}

					}else
						{
							echo('<Li>No se pudo subir la foto: <B>'.$fotoNombre.'</B> </Li>');
						}
				}
				/*
				foreach($_FILES['fotoNueva']['name'] as $imagen=>$nombre)
				{
					$fecha = date('d-m-Y_H_i_s');
					$extencion = explode('.' , $nombre);
					$destino = 'galeriaAnuncio/Imag-'.$idUsuario.'-'.$lugar.'-'.$fecha.'-'.rand(0, 100).'.'.$extencion[1];
					
					$rtOriginal=$_FILES['fotoNueva']['tmp_name'][$imagen];
					include 'redimensionar.php';
				
					//echo ($_FILES['fotoNueva']['tmp_name'][$imagen]);

					if (copy($_FILES['fotoNueva']['tmp_name'][$imagen] , $destino))
					{
						//echo('<Li>Archivo subido: <b>'.$nombre.'</b> </Li>');
						
						$sql1 = 'INSERT INTO fotoestableci (nombre, urlFotoEstableci, idEstableci) VALUES("", "'.$destino.'", "'.$lugar.'")';

						if(!mysqli_query($db->conectarse(), $sql1))
						{
						    echo('Ocurrio un error ejecutando el query de insert de la foto [' . mysqli_error() . ']');
						}else
							{
								echo '<html><head></head><body>
										<script language="javascript">
											window.location="baseFotosAnuncio.php?lugar='.$lugar.'"
										</script>
									</body></html>';
							}
					}
				}
				*/

			}else
				{
					//$valido = 0;
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
								window.location="baseFotosAnuncio.php?lugar='.$lugar.'"
							</script>
							</body></html>');

					//echo ($valido);
				}

			
		}else
			{
				echo ('<html><head>
							<script type="text/javascript">
								function confirm_alert3()
								{
									alert("No ha seleccionado ninguna foto.");
								}
							</script>
						</head><body>
						
						<script>
							confirm_alert3();
							window.location="baseFotosAnuncio.php?lugar='.$lugar.'"
						</script>
						</body></html>');
			}
	}


?>