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

	
	
	/*
	$nombre = $_POST['nombre'];
	$direccion = $_POST['direccion'];
	$descripcion = $_POST['descripcion'];
	$tipoEstablecimiento = $_POST['tipoEstablecimiento'];
	$provincia = $_POST['ddlProvinciaP'];
	$ciudad	= $_POST['ddlCiudadP'];
	*/

	if($_FILES['fotoNueva']['name'] != '')
	{
		$lugar=$_POST['lugar'];

		foreach($_FILES['fotoNueva']['name'] as $imagen=>$nombre)
		{
			$fecha = date('d-m-Y_H_i_s');
			$extencion = explode('.' , $nombre);
			$destino = 'galeriaAnuncio/Img-'.$idUsuario.'-'.$lugar.'-'.$fecha.'-'.rand(0, 100).'.'.$extencion[1];
			
			if (copy($_FILES['fotoNueva']['tmp_name'][$imagen] , $destino))
			{
				//echo('<Li>Archivo subido: <b>'.$nombre.'</b> </Li>');
				
				$sql1 = 'INSERT INTO fotoestableci (nombre, urlFotoEstableci, idEstableci) VALUES("", "'.$destino.'", "'.$lugar.'")';

				if(!mysqli_query($db->conectarse(), $sql1))
				{
				    echo('Ocurrio un error ejecutando el query de insert[' . mysqli_error() . ']');
				}else
					{
						echo '<html><head></head><body>
								<script language="javascript">
									window.location="baseFotosAnuncio.php"
								</script>
							</body></html>';
					}
			}
		}
	}else
		{
			echo "Holaaaaaaaaaaaaaaaaaaaaa";
		}



?>