<?PHP
	session_start();
?>
<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Sistema de Informacion al Viajero">
		<meta name="keywords" content="mochilero, hostel, hotel, ruta, argentina, diario de viaje">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<!--<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>-->
		<script type="text/javascript" src="js/jquery-latest.min.js"></script>
		<script type="text/javascript" src="js/jquery.slides.min.js"></script>
		<!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
		<script>
			$(function() {
			  	$('#slides').slidesjs({
				    width: 920,
				    height: 520,
				    play: {
						active: true,
						auto: true,
						interval: 6000,
						swap: true
				    }
				});
			});
		</script>

		<!-- End SlidesJS Required -->
		<title>TravelIN</title>

	</head>

	<body>
		<header>
			<div id="subheader">
				<div id="logotipo"><a href="index.php"><p><img src="imagenes/Logo_TravelIN.png"></a></p></div>
				<nav>
					<ul>
						<li><a href="#modal1">Ingreso</a></li>
						<li><a href="#modal3">Registro</a></li>
					</ul>
				</nav>

				<div id="modal1" class="modalmask">
					<div class="modalbox movedown">
						<!--<div class="movedown">-->
							<a href="#close" title="Close" class="close">X</a>
							<!-- Formulario -->
							<p>
								<div id="cuerpo">
								    <form id="form-login" action="" method="post" autocomplete="off">
								        <p><label for="usuario">Usuario:</label></p>
								        <p class="mb10"><input name="usuario" id="usuario" autofocus="" required="" type="text"></p>
									    <p><label for="contrasenia">Contraseña:</label></p>
									    <p class="mb10"><input name="contrasenia" id="contrasenia" required="" type="password"></p>
									    <p><a href="recuperarPass.htm">¿Olvidó su contraseña?</a></p>
								    	<p><input name="btnIngresar" id="btnIngresar" value="Ingresar" class="boton" type="submit"></p>
								    </form>
							   	</div>
							</p>
						<!--</div>-->
					</div>
				</div>

				<div id="modal3" class="modalmask">
					<div class="modalbox resize">
						<!--<div class="movedown">-->
							<a href="#close" title="Close" class="close">X</a>
							<!-- Formulario -->
							<p>
								<div id="cuerpoReg">
								    <form id="form-reg" action="" method="post" autocomplete="off">
								        <p><label for="nombre">Nombre:</label></p>
								        <p class="mb10"><input name="nombre" id="nombre" autofocus="" required="" type="text"></p>
								        <p><label for="mail">E-mail:</label></p>
								        <p class="mb10"><input name="mail" id="mail" required="" type="text"></p>
									    <p><label for="regContrasenia">Contraseña:</label></p>
									    <p class="mb10"><input name="regContrasenia" id="regContrasenia" required="" type="password"></p>
									    <p><label for="regContrasenia2">Repetir la Contraseña:</label></p>
									    <p class="mb10"><input name="regContrasenia2" id="regContrasenia2" required="" type="password"></p>
								    	<p><input name="btnRegistrarse" id="btnRegistrarse" value="Registrarse" class="boton" type="submit"></p>
								    </form>
							   	</div>
							</p>
						<!--</div>-->
					</div>
				</div>

			</div>
		</header>
		<section id="contenedor_slides">
			<section id="slides">
				<img src="imagenes/01-Mendoza_Vallecitos_Campamento-montanismo.jpg" alt="01-Mendoza_Vallecitos_Campamento-montañismo">
				<img src="imagenes/02-buenos-aires-puerto-madero-puente-de-la-mujer.jpg" alt="02-buenos-aires-puerto-madero-puente-de-la-mujer.jpg">
				<img src="imagenes/03-Mendoza_cumbre-adolfo-calle.jpg" alt="03-Mendoza_cumbre-adolfo-calle.jpg">
				<img src="imagenes/04-Patagonia_puerto-madryn-punta-tombo.jpg" alt="04-Patagonia_puerto-madryn-punta-tombo.jpg">
				<img src="imagenes/05-Patagonia_calafate-perito-moreno.jpg" alt="05-Patagonia_calafate-perito-moreno.jpg">
				<img src="imagenes/06-Patagonia_chalten-ruta-40.jpg" alt="06-Patagonia_chalten-ruta-40.jpg">
				<img src="imagenes/07-Patagonia_bariloche-valle-frey.jpg" alt="07-Patagonia_bariloche-valle-frey.jpg">
			</section>

			<section id="busqueda">
<!--
				<div id="fondoAgrupadorBusqueda"></div>
-->
				<div id="agrupadorBusqueda">
					<form id="buscarDestino">
<!--						<label class="labelFormBusqueda">Provincia:	</label>-->
						
						<select class="dropDownlist" name="ddlProvincia">
							<option value="">Elija una provincia</option>
							<option value="Buenos Aires">Buenos Aires</option>
							<option value="Buenos Aires Capital">Buenos Aires Capital</option>
							<option value="Catamarca">Catamarca</option>
							<option value="Chaco">Chaco</option>
							<option value="Chubut">Chubut</option>
							<option value="Cordoba">Cordoba</option>
							<option value="Corrientes">Corrientes</option>
							<option value="Entre Rios">Entre Rios</option>
							<option value="Formosa">Formosa</option>
							<option value="Jujuy">Jujuy</option>
							<option value="La Pampa">La Pampa</option>
							<option value="La Rioja">La Rioja</option>
							<option value="Mendoza">Mendoza</option>
							<option value="Misiones">Misiones</option>
							<option value="Neuquen">Neuquen</option>
							<option value="Rio Negro">Rio Negro</option>
							<option value="Salta">Salta</option>
							<option value="San Juan">San Juan</option>
							<option value="San Luis">San Luis</option>
							<option value="Santa Cruz">Santa Cruz</option>
							<option value="Santa Fe">Santa Fe</option>
							<option value="Santiago del Estero">Santiago del Estero</option>
							<option value="Tierra del Fuego">Tierra del Fuego</option>
							<option value="Tucuman">Tucuman</option>
						</select>
<!--						<br>

						<label class="labelFormBusqueda">Ciudad: </label>-->
						<select class="dropDownList" name="ddlCiudad">
							<option value="">Elija una ciudad</option>
						</select>
						

<!--						<label class="labelFormBusqueda">Rubro: </label>-->
						<select class="dropDownList" name="ddlProveedor">
							<option value="">Elija un rubro</option>
							<option value="Hotel">Hotel</option>
							<option value="Hostel">Hostel</option>
							<option value="Bar">Bar</option>
							<option value="Restaurante">Restaurante</option>
							<option value="Agencia de Turismo">Agencia de Turismo</option>
							<option value="Artesanias">Artesanias</option>
						</select>
						<!--
						<input type="text" id="txtDestino" placeholder="Busqueda por ciudad, provincia">
						-->
						<button type="submit" id="btnBuscar">Buscar</button>

					</form>
				</div>
			</section>
		</section>

		


		<section id="wrap">
			
			<section id="main">
				<section id="slides_vacio">
				</section>

<!--				
				<section id="slides">
					<img src="imagenes/01-Mendoza_Vallecitos_Campamento-montanismo.jpg" alt="01-Mendoza_Vallecitos_Campamento-montañismo">
					<img src="imagenes/02-buenos-aires-puerto-madero-puente-de-la-mujer.jpg" alt="02-buenos-aires-puerto-madero-puente-de-la-mujer.jpg">
					<img src="imagenes/03-Mendoza_cumbre-adolfo-calle.jpg" alt="03-Mendoza_cumbre-adolfo-calle.jpg">
					<img src="imagenes/04-Patagonia_puerto-madryn-punta-tombo.jpg" alt="04-Patagonia_puerto-madryn-punta-tombo.jpg">
					<img src="imagenes/05-Patagonia_calafate-perito-moreno.jpg" alt="05-Patagonia_calafate-perito-moreno.jpg">
					<img src="imagenes/06-Patagonia_chalten-ruta-40.jpg" alt="06-Patagonia_chalten-ruta-40.jpg">
					<img src="imagenes/07-Patagonia_bariloche-valle-frey.jpg" alt="07-Patagonia_bariloche-valle-frey.jpg">
				</section>

				<section id="busqueda">
					<div id="agrupadorBusqueda">
						<form id="buscarDestino">
							<input type="text" id="txtDestino" placeholder="Busqueda por ciudad, provincia">
							<button type="submint" id="btnBuscar">Buscar</button>

						</form>
					</div>
				</section>
-->
				<div id="contTituloResultados">
					<div id="contTituloResultados2">
						<div id="tituloResultados">
							<p><h1>RESULTADOS ENCONTRADOS.</h1></p>
						</div>
						<div id="provinciaResultados">
							<h2>Provincia: San Luis</h2>
						</div>
						<div id="ciudadResultados">
							<h2>Ciudad: Merlo </h2>
						</div>
						<div id="rubroResultados">
							<h2>Rubro: Hotel</h2>
						</div>
					
					</div>				

				</div>


				<section id="contenido"><!-- PONER UN COLOR DE FONDO DEL ARTICULO UN POCO MAS CLARO QUE #87C1B2 Ó BLANCO --> 
					<div class="contArticIzq">
						<article id="articPublic1" class="articPublic">
							<div class="parteSupArtic">
								<hgroup><a href="detalles_publicacion.htm"><h3 class="tituloPublic">Hotel Parque y Sol</h3></a></hgroup>
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
								<hgroup><a href="detalles_publicacion.htm"><h3 class="tituloPublic">Hostel Residencial Chachen</h3></a></hgroup>
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
								<hgroup><a href="detalles_publicacion.htm"><h3 class="tituloPublic">Villa de Merlo Hotel & Spa</h3></a></hgroup>
								<div id="ciudadPublic3"><p class="ciudadPublic">Merlo, San Luis </p></div>
								<img id="imagenPublic3" class="thumb" src="imagenes/hotel_villa_merlo_hys_1.jpg" alt="Hotel Villa de Merlo - Hotel & Spa">
								<div id="textoPublic3"><p>Con un estilo arquitectónico Cálido y Confortable.
									El Hotel SPA Villa de Merlo ofrece un conjunto de comodidades y servicios que cubren ampliamente los requerimientos del turismo nacional e internacional. Las tarifas difieren de acuerdo a la vista disponible en cada habitacion.</p></div>
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
								<hgroup><a href="detalles_publicacion.htm"><h3 class="tituloPublic">Hotel Mundial</h3></a></hgroup>
								<div id="ciudadPublic4"><p class="ciudadPublic">Merlo, San Luis </p></div>
								<img id="imagenPublic4" class="thumb" src="imagenes/hotel_mundial_1.jpg" alt="Hotel Mundial">
								<div id="textoPublic4"><p>Todas las comodidades que usted necesita para disfrutar unas hermosas vacaciones.
									<br>
								    Aire acondicionado.
								    Calefaccion central.
								    TV en habitaciones.
								    Piscina climatizada.
								    Solarium.
								    4000m2 de parque arbolado.

								    Cajas de seguridad individuales.
								    Zona Wi-Fi.
								    Desayuno buffet.
								    Asesoramiento turistico.
								    Cocheras cubiertas.</p></div>
							</div>
							<div class="parteInfArtic">
								<div class="califPublic">
									<img src="imagenes/2Estrellas.gif">
								</div>
							</div>
						</article>
					</div>
<!--
					<div class="contArticMed">
						<article id="articPublic5" class="articPublic">
							<div class="parteSupArtic">
								<hgroup><a href="detalles_publicacion.htm"><h3 class="tituloPublic">Solar Maiten</h3></a></hgroup>
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
								<hgroup><a href="detalles_publicacion.htm"><h3 class="tituloPublic">Diplomatic Hotel</h3></a></hgroup>
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
					<!--
-->
				</section>
<!--
				<aside>
					<section class="widget">
						<div id="textoAnunciese">
							<h3>¿Tenes un negocio y queres que más gente lo conosca?</h3>
							<p>TravelIN es tú mejor opción.</p>
							<h3>¿Por que?</h3><p>Porque TravelIN te permite publicarlo totalmente gratis y que más turistas puedan conocerlo, calificarlo
							y recomendarselo a sus amigos. </p>
						</div>
						<div id="imagenAnunciese">
							<a href="#"><img id="imagPublica" src="imagenes/publicaAnuncio.png"></a>
						</div>
					
					</section>

				</aside>
-->
			</section>


		</section>

		<section id="pie">

			<footer>
				<section id="acerca-de">
					<article>
						<hgroup><h3>Acerca de......</h3></hgroup>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</article>
				</section>

				<section id="redes-s">
					<div class="google"><a href="#"></a></div>
					<div class="twitter"><a href="#"></a></div>
					<div class="pinterest"><a href="#"></a></div>
					<div class="facebook"><a href="#"></a></div>

				</section>

			</footer>

			<div id="copyright"><p>Todos los derechos reservados.</p></div>

		</section>
	
	</body>

</html>