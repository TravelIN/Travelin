<?php 
	//session_destroy();

	//include 'coneccion.php';
	
	$db = new Conexion();

	//$idUsuario = $_SESSION['idUsuario'];
	//$idUsuario = 2;
	//$provincia = $_POST['ddlProvincia'];
	//$ciudad = $_POST['ddlCiudad'];
	//$tipoEstableci = $_POST['ddlProveedor'];

	$contador = 1;
	//$contadorTotal = 0;

	$sql = 'SELECT E.idEstableci idE, E.nombre nombreE, E.descripcion descE, E.rutaFotoEstableci fotoE, C.descripcion ciudad, P.descripcion provincia 
			FROM establecimiento E INNER JOIN ciudad C ON E.idCiudad= C.id INNER JOIN provincia P ON C.idProvincia=P.id 
			WHERE E.idEstado = 2 ORDER BY RAND() LIMIT 6';



/*
	$sql = 'SELECT E.idEstableci idE, E.nombre nombreE, E.descripcion descE, C.descripcion ciudad, P.descripcion provincia FROM establecimiento E INNER JOIN ciudad C ON E.idCiudad= C.id INNER JOIN provincia P ON C.idProvincia=P.id WHERE E.idEstado = 2';
*/	
	
	if(!$result = mysqli_query($db->conectarse(), $sql)){
	    //echo('Ocurrio un error ejecutando el query [' . mysqli_error() . ']');
	    echo("MALLLLL");
	}else
		{
			//echo '<div id="infoBusqueda" name="infoBusqueda">Cantidad de resultados encontrados: '.mysqli_num_rows($result).'<br/></div>';
			if(mysqli_num_rows($result) > 0)
			{
				while($Rs = mysqli_fetch_array($result))
				{
					$direFoto = "imagenes/Imagen-para-sin-imagen.jpg";
					//$contadorTotal += 1;

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
											<div id="ciudadPublic1"><p class="ciudadPublic">'.utf8_encode($Rs['ciudad']).', '.utf8_encode($Rs['provincia']).' </p></div>
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
											<div id="ciudadPublic2"><p class="ciudadPublic">'.utf8_encode($Rs['ciudad']).', '.utf8_encode($Rs['provincia']).'</p></div>
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
											<div id="ciudadPublic3"><p class="ciudadPublic">'.utf8_encode($Rs['ciudad']).', '.utf8_encode($Rs['provincia']).' </p></div>
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



<!--

					<div class="contArticIzq">
						<article id="articPublic1" class="articPublic">
							<div class="parteSupArtic">
								<hgroup><a href="detalles_publicacion.php"><h3 class="tituloPublic">Hotel Parque y Sol</h3></a></hgroup>
								<div id="ciudadPublic1"><p class="ciudadPublic">Merlo, San Luis </p></div>
								<img id="imagenPublic1" class="thumb" src="imagenes/Hotel_Parque_Y_Sol.jpg" alt="Hotel Parque Y Sol">
								<div id="textoPublic1"><p>Ubicado sobre Av del Sol en frente al Casino internacional Flamingo.<br>
								30 habitaciones estandar - Baño privado - Aire acondicionado - Ventilador de techo - 
								Telefonía - TV por cable - Piscina - Pileta para niños - Hidromasaje - 1 ha. de parque
								- Estacionamiento - Servicio de emergencias médicas - Mucama.</p></div>
							</div>
							<div class="parteInfArtic">
								<div class="califPublic">
									<img src="imagenes/5Estrellas.gif">
								</div>
							</div>

						</article>
					</div>

					<div class="contArticMed">
						<article id="articPublic2" class="articPublic">
							<div class="parteSupArtic">
								<hgroup><a href="detalles_publicacion.php"><h3 class="tituloPublic">Hostel Residencial Chachen</h3></a></hgroup>
								<div id="ciudadPublic2"><p class="ciudadPublic">Merlo, San Luis</p></div>
								<img id="imagenPublic2" class="thumb" src="imagenes/Hostel_Residencial_Chachen.jpg" alt="Hostel Residencial Chachen">
								<div id="textoPublic2"><p>Residencial Chachen, ubicado en plena zona residencial de Merlo, a 12 cuadras de
								la plaza, a 5 cuadras del Casino Internacional, a 2 de Av. del Sol, a 3 del paseo de
								compras y sala de cine y al pie de las sierras de los Comechingones. Con la
								atención personalizada de sus dueños y asesoramiento turístico.</p></div>
							</div>
							<div class="parteInfArtic">
								<div class="califPublic">
									<img src="imagenes/3Estrellas.gif">
								</div>
							</div>
						</article>
					</div>

					<div class="contArticDer">
						<article id="articPublic3" class="articPublic">
							<div class="parteSupArtic">
								<hgroup><a href="detalles_publicacion.php"><h3 class="tituloPublic">Hotel Sol Cataratas</h3></a></hgroup>
								<div id="ciudadPublic3"><p class="ciudadPublic">Puerto Iguazú, Misiones </p></div>
								<img id="imagenPublic3" class="thumb" src="imagenes/Hotel_Sol_Cataratas.jpg" alt="Hotel Sol Cataratas">
								<div id="textoPublic3"><p>Hotel Sol Cataratas esta rodeado por pintorescos árboles autóctonos,
								le conceden un entorno de privacidad en pleno contacto con la naturaleza. Es perfecto para 
								relajarse luego de un día de excursiones.</p></div>
							</div>
							<div class="parteInfArtic">
								<div class="califPublic">
									<img src="imagenes/5Estrellas.gif">
								</div>
							</div>
						</article>
						
					</div>

					<div class="contArticIzq">
						<article id="articPublic4" class="articPublic">
							<div class="parteSupArtic">
								<hgroup><a href="detalles_publicacion.php"><h3 class="tituloPublic">Hotel El Libertador</h3></a></hgroup>
								<div id="ciudadPublic4"><p class="ciudadPublic">Puerto Iguazú, Misiones</p></div>
								<img id="imagenPublic4" class="thumb" src="imagenes/Hotel_El_Libertador.gif" alt="Hotel El Libertador">
								<div id="textoPublic4"><p>Hotel El Libertador, un lugar excepcional en medio del imponente escenario natural que ofrece Puerto Iguazú.
								Usted encontrará un ambiente de comodidad y relax.
								Estamos preparados para que su estadía sea inolvidable, para que disfrute de nuestros amplios espacios, vistas fantásticas y se sienta atendido por un equipo de personas que combinan profesionalismo con calidez humana.</p></div>
							</div>
							<div class="parteInfArtic">
								<div class="califPublic">
									<img src="imagenes/2Estrellas.gif">
								</div>
							</div>
						</article>
					</div>

					<div class="contArticMed">
						<article id="articPublic5" class="articPublic">
							<div class="parteSupArtic">
								<hgroup><a href="detalles_publicacion.php"><h3 class="tituloPublic">Solar Maiten</h3></a></hgroup>
								<div id="ciudadPublic5"><p class="ciudadPublic">Mendoza, Mendoza </p></div>
								<img id="imagenPublic5" class="thumb" src="imagenes/Solar_Maiten.jpg" alt="Solar Maiten">
								<div id="textoPublic5"><p>Pensando en alcanzar la mayor satisfacción al turista, nació SOLAR MAITEN. Ubicado en una zona estratégica, 
								en un barrio residencial a pocas cuadras del camino del vino y el polo gastronómico de la ciudad y a sólo minutos de paisajes, 
								montañas, rios y aventuras. Es un apart hotel cuidadosamente decorado y equipado. </p></div>
							</div>
							<div class="parteInfArtic">
								<div class="califPublic">
									<img src="imagenes/0Estrellas.gif">
								</div>
							</div>
						</article>
					</div>

					<div class="contArticDer">
						<article id="articPublic6" class="articPublic">
							<div class="parteSupArtic">
								<hgroup><a href="detalles_publicacion.php"><h3 class="tituloPublic">Diplomatic Hotel</h3></a></hgroup>
								<div id="ciudadPublic6"><p class="ciudadPublic">Mendoza, Mendoza</p></div>
								<img id="imagenPublic6" class="thumb" src="imagenes/Diplomatic_Hotel.jpg" alt="Diplomatic Hotel">
								<div id="textoPublic6"><p>Excelente ubicación. Rodeado de la mejor oferta gastronómica, wine shops y tiendas 
								que lo convierten en la opción ideal para los huéspedes que disfrutan caminar sus alrededores, a la cual llamamos
								 la Recoleta Mendocina.</p></div>
							</div>
							<div class="parteInfArtic">
								<div class="califPublic">
									<img src="imagenes/1Estrella.gif">
								</div>
							</div>
						</article>
					</div>
-->