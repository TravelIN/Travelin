<?php 
	//session_destroy();

	//include 'coneccion.php';
	
	$db = new Conexion();

	//$idUsuario = $_SESSION['idUsuario'];
	//$idUsuario = 2;
	$provincia = $_POST['ddlProvincia'];
	$ciudad = $_POST['ddlCiudad'];
	$tipoEstableci = $_POST['ddlProveedor'];

	$contador = 1;

	//$sql = 'SELECT * FROM establecimiento WHERE idCiudad = '.$ciudad.' AND idTipoEstableci = '.$tipoEstableci.' AND idEstado = 2';
	if($provincia == 0)//E.idEstado el valor 2 es activo, 1 pendiente, ............
	{
		if($tipoEstableci == 0)
		{
			//echo "Muestra todo";
			$sql = 'SELECT E.idEstableci idE, E.nombre nombreE, E.descripcion descE, E.rutaFotoEstableci fotoE, C.descripcion ciudad, P.descripcion provincia FROM establecimiento E INNER JOIN ciudad C ON E.idCiudad= C.id INNER JOIN provincia P ON C.idProvincia=P.id WHERE E.idEstado = 2';
		}else
			{
				//echo("filtra solo por rubro");
				$sql = 'SELECT E.idEstableci idE, E.nombre nombreE, E.descripcion descE, E.rutaFotoEstableci fotoE, C.descripcion ciudad, P.descripcion provincia FROM establecimiento E INNER JOIN ciudad C ON E.idCiudad= C.id INNER JOIN provincia P ON C.idProvincia=P.id WHERE E.idTipoEstableci = '.$tipoEstableci.' AND E.idEstado = 2';
			}
	}else
		{
			if($ciudad == 0)
			{
				if($tipoEstableci == 0)
				{
					//echo "filtra por provincia solamente".$provincia;
					$sql = 'SELECT E.idEstableci idE, E.nombre nombreE, E.descripcion descE, E.rutaFotoEstableci fotoE, C.descripcion ciudad, P.descripcion provincia FROM establecimiento E INNER JOIN ciudad C ON E.idCiudad= C.id INNER JOIN provincia P ON C.idProvincia=P.id WHERE E.idEstado = 2 AND P.id ='.$provincia;
				}else
					{
						//echo("filtra por provincia y rubro");
						$sql = 'SELECT E.idEstableci idE, E.nombre nombreE, E.descripcion descE, E.rutaFotoEstableci fotoE, C.descripcion ciudad, P.descripcion provincia FROM establecimiento E INNER JOIN ciudad C ON E.idCiudad= C.id INNER JOIN provincia P ON C.idProvincia=P.id WHERE E.idEstado = 2 AND P.id ='.$provincia.' AND E.idTipoEstableci = '.$tipoEstableci;
					}
			}else
				{
					if($tipoEstableci == 0)
					{
						//echo("filtra por (provincia) ciudad prov= ".$provincia." ciu= ".$ciudad);
						$sql = 'SELECT E.idEstableci idE, E.nombre nombreE, E.descripcion descE, E.rutaFotoEstableci fotoE, C.descripcion ciudad, P.descripcion provincia FROM establecimiento E INNER JOIN ciudad C ON E.idCiudad= C.id INNER JOIN provincia P ON C.idProvincia=P.id WHERE E.idEstado = 2 AND C.id = '.$ciudad;
					}else
						{
							//echo("filtra por (provincia) ciudad y rubro");
							$sql = 'SELECT E.idEstableci idE, E.nombre nombreE, E.descripcion descE, E.rutaFotoEstableci fotoE, C.descripcion ciudad, P.descripcion provincia FROM establecimiento E INNER JOIN ciudad C ON E.idCiudad= C.id INNER JOIN provincia P ON C.idProvincia=P.id WHERE E.idEstado = 2 AND C.id = '.$ciudad.' AND E.idTipoEstableci = '.$tipoEstableci;
						}
				}
		}

/*
	$sql = 'SELECT E.idEstableci idE, E.nombre nombreE, E.descripcion descE, C.descripcion ciudad, P.descripcion provincia FROM establecimiento E INNER JOIN ciudad C ON E.idCiudad= C.id INNER JOIN provincia P ON C.idProvincia=P.id WHERE E.idEstado = 2';
*/	
	
	if(!$result = mysqli_query($db->conectarse(), $sql)){
	    //echo('Ocurrio un error ejecutando el query [' . mysqli_error() . ']');
	    echo("MALLLLL");
	}else
		{
			if(mysqli_num_rows($result) > 0)
			{
				while($Rs = mysqli_fetch_array($result))
				{
					$direFoto = "";

					if (!(($Rs['fotoE'] == '') || ($Rs['fotoE'] == null)))
					{
						$direFoto = $Rs['fotoE'];
					}

					switch ($contador)
					{
						case '1':
							echo '<div class="contArticIzq">
									<article id="articPublic1" class="articPublic">
										<div class="parteSupArtic">
											<hgroup><a href="detalles_publicacion.php?lugar='.$Rs['idE'].'"><h3 class="tituloPublic">'.$Rs['nombreE'].'</h3></a></hgroup>
											<div id="ciudadPublic1"><p class="ciudadPublic">'.$Rs['ciudad'].', '.$Rs['provincia'].' </p></div>
											<img id="imagenPublic1" class="thumb" src="'.$direFoto.'">
											<div id="textoPublic1"><p>'.$Rs['descE'].'</p></div>
										</div>
										<div class="parteInfArtic">
											<div class="califPublic">
												<img src="imagenes/5Estrellas.gif">
											</div>
										</div>

									</article>
								</div>';

							$contador++;
		
							break;
						
						case '2':
							echo '<div class="contArticMed">
									<article id="articPublic2" class="articPublic">
										<div class="parteSupArtic">
											<hgroup><a href="detalles_publicacion.php?lugar='.$Rs['idE'].'"><h3 class="tituloPublic">'.$Rs['nombreE'].'</h3></a></hgroup>
											<div id="ciudadPublic2"><p class="ciudadPublic">'.$Rs['ciudad'].', '.$Rs['provincia'].'</p></div>
											<img id="imagenPublic2" class="thumb" src="'.$direFoto.'">
											<div id="textoPublic2"><p>'.$Rs['descE'].'</p></div>
										</div>
										<div class="parteInfArtic">
											<div class="califPublic">
												<img src="imagenes/3Estrellas.gif">
											</div>
										</div>
									</article>
								</div>';

							$contador++;

							break;

						case '3':
							echo '<div class="contArticDer">
									<article id="articPublic3" class="articPublic">
										<div class="parteSupArtic">
										<hgroup><a href="detalles_publicacion.php?lugar='.$Rs['idE'].'"><h3 class="tituloPublic">'.$Rs['nombreE'].'</h3></a></hgroup>
											<div id="ciudadPublic3"><p class="ciudadPublic">'.$Rs['ciudad'].', '.$Rs['provincia'].' </p></div>
											<img id="imagenPublic3" class="thumb" src="'.$direFoto.'">
											<div id="textoPublic3"><p>'.$Rs['descE'].'</p></div>
										</div>
										<div class="parteInfArtic">
											<div class="califPublic">
												<img src="imagenes/5Estrellas.gif">
											</div>
										</div>
									</article>
									
								</div>';

							$contador = 1;
							
							break;
					}
					
				}
			}

		}



?>