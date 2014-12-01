<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Sistema de Informacion al Viajero">
		<meta name="keywords" content="mochilero, hostel, hotel, ruta, argentina, diario de viaje">
		<!--<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>-->
		<script type="text/javascript" src="js/jquery-latest.min.js"></script>
		<script type="text/javascript" src="js/jquery.slides.min.js"></script>

		<!-- Datepicker -->
		<!--<script type="text/javascript" src="jquery.js"></script>-->
		<script type="text/javascript" src="js/date.js"></script>
		<script type="text/javascript" src="js/jquery.datePicker.js"></script>
		<link rel="stylesheet" type="text/css" href="css/datePicker.css"  /><!-- Datepicker -->

		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/elastislide.css" />

		<script type="text/javascript" src="js/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/jquery.elastislide.js"></script>
		<script type="text/javascript" src="js/gallery.js"></script>

		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		
		<noscript>
			<style>
				.es-carousel ul{
					/*display:block;*/
				}
			</style>
		</noscript>
		<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Imagen Anterior</a>
						<a href="#" class="rg-image-nav-next">Imagen Siguiente</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
		</script>
<!-- Script Datepicker -->
		<script type="text/javascript">
			$(function()
			{
			    $('.date-pick').datePicker({clickInput:true});
			});
		</script><!-- Script Datapicker -->

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
<!--		
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

				<div id="agrupadorBusqueda">
					<form id="buscarDestino">
						
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

						<select class="dropDownList" name="ddlCiudad">
							<option value="">Elija una ciudad</option>
						</select>
						
						<select class="dropDownList" name="ddlProveedor">
							<option value="">Elija un rubro</option>
							<option value="Hotel">Hotel</option>
							<option value="Hostel">Hostel</option>
							<option value="Bar">Bar</option>
							<option value="Restaurante">Restaurante</option>
							<option value="Agencia de Turismo">Agencia de Turismo</option>
							<option value="Artesanias">Artesanias</option>
						</select>

						<button type="submit" id="btnBuscar">Buscar</button>

					</form>
				</div>
			</section>
		</section>


		<section id="wrap">
			
			<section id="main">
				<section id="slides_vacio">
				</section>
-->
		<div id="centrador">
			<section id="contenido">
				<div id="contTituloAnuncio">
					<div id="contTituloIzq">
						<div id="contNombreAnuncio">
							<p><h2>Hotel Parque y Sol</h2></p>
						</div>
						<div id="contCiudadAnuncio">
							<p><h4>Merlo, San Luis</h4></p>
						</div>
					</div>
					<div id="contTituloDer">
						<div id="contCalifAnuncio">
							<img src="imagenes/5Estrellas.gif">
						</div>
					</div>
				</div>

				<div id="contMedioAnuncio">
					<div id="contFotoAnuncio">
						<!--<img id="imagenAnuncio" src="imagenes/Hotel_Parque_Y_Sol.jpg" alt="Hotel Parque Y Sol">-->
						<div id="rg-gallery" class="rg-gallery">
							<div class="rg-thumbs">
								<!-- Elastislide Carousel Thumbnail Viewer -->
								<div class="es-carousel-wrapper">
									<div class="es-nav">
										<span class="es-nav-prev">Previous</span>
										<span class="es-nav-next">Next</span>
									</div>
									<div class="es-carousel">
										<ul>
											<li><a href="#"><img src="imagenes/thumbs/hotel_parque_y_sol_1.jpg" data-large="imagenes/hotel_parque_y_sol_1.jpg" alt="Parque y sol" /></a></li>
											<li><a href="#"><img src="imagenes/thumbs/hotel_parque_y_sol_2.jpg" data-large="imagenes/hotel_parque_y_sol_2.jpg" alt="Parque y sol" /></a></li>
											<li><a href="#"><img src="imagenes/thumbs/hotel_parque_y_sol_3.jpg" data-large="imagenes/hotel_parque_y_sol_3.jpg" alt="Parque y sol" /></a></li>
											<li><a href="#"><img src="imagenes/thumbs/hotel_parque_y_sol_1.jpg" data-large="imagenes/hotel_parque_y_sol_1.jpg" alt="Parque y sol" /></a></li>
											<li><a href="#"><img src="imagenes/thumbs/hotel_parque_y_sol_2.jpg" data-large="imagenes/hotel_parque_y_sol_2.jpg" alt="Parque y sol" /></a></li>
											<li><a href="#"><img src="imagenes/thumbs/hotel_parque_y_sol_3.jpg" data-large="imagenes/hotel_parque_y_sol_3.jpg" alt="Parque y sol" /></a></li>
											<li><a href="#"><img src="imagenes/thumbs/hotel_parque_y_sol_1.jpg" data-large="imagenes/hotel_parque_y_sol_1.jpg" alt="Parque y sol" /></a></li>
											<li><a href="#"><img src="imagenes/thumbs/hotel_parque_y_sol_2.jpg" data-large="imagenes/hotel_parque_y_sol_2.jpg" alt="Parque y sol" /></a></li>
											<li><a href="#"><img src="imagenes/thumbs/hotel_parque_y_sol_3.jpg" data-large="imagenes/hotel_parque_y_sol_3.jpg" alt="Parque y sol" /></a></li>
											<li><a href="#"><img src="imagenes/thumbs/hotel_parque_y_sol_1.jpg" data-large="imagenes/hotel_parque_y_sol_1.jpg" alt="Parque y sol" /></a></li>
											<li><a href="#"><img src="imagenes/thumbs/hotel_parque_y_sol_2.jpg" data-large="imagenes/hotel_parque_y_sol_2.jpg" alt="Parque y sol" /></a></li>
											<li><a href="#"><img src="imagenes/thumbs/hotel_parque_y_sol_3.jpg" data-large="imagenes/hotel_parque_y_sol_3.jpg" alt="Parque y sol" /></a></li>
											
										</ul>
									</div>
								</div>
								<!-- End Elastislide Carousel Thumbnail Viewer -->
							</div><!-- rg-thumbs -->
						</div><!-- rg-gallery -->
					</div>
					<a href="baseFotosAnuncio.php?lugar=<?php echo $_GET['lugar']; ?>"> Fotos </a>
					<div id="contPanelReserva">
						<div id="contPanelReserva2">
							<div id="panelReservaPrecio">
								Desde $80 / Noche
							</div>
							<div id="panelReservaFechaInic">
								<div id="fechaInicIzq">
									Fecha de Ingreso
								</div>
								
								<div id="fechaInicDer">
									<input type="text" class="date-pick" id="fechaInic" name="fechaInic" value="" />
								</div>
								
							</div>
							
							<div id="panelReservaFechaFin">
								<div id="fechaFinIzq">
									Fecha de Salida
								</div>
								
								<div id="fechaFinDer">
									<input type="text" class="date-pick" id="fechaFin" name="fechaFin" value="" />
								</div>

							</div>
							
							<div id="panelReservaPersonas">
								<div id="personasIzq">
									Cantidad de Personas
								</div>

								<div id="personasDer">
									<select class="dropDownList2" name="ddlCantPersonas" id="ddlCantPersonas">
										<option value="">Elija una cantidad</option>
										<option value="1">1 Persona</option>
										<option value="2">2 Personas</option>
										<option value="3">3 Personas</option>
										<option value="4">4 Personas</option>
										<option value="5">5 Personas</option>
										<option value="6">6 Personas</option>
										<option value="7">7 Personas</option>
										<option value="8">8 Personas</option>
									</select>
								</div>
								
							</div>
							<div id="panelReservaBotones">
								<button type="submit" id="btnReservar">Reservar</button>
							</div>
							<!---->
						</div>
					</div>
					<div id="contDescripAnuncio">
						<div id="contDescripAnuncio2">
							<div id="descripAnunTexto">
								Ubicado sobre Av del Sol en frente al Casino internacional Flamingo.
								<br><br>
								    <li>30 habitaciones estandar</li>
								    <li>Baño privado</li>
								    <li>Aire acondicionado</li>
								    <li>Ventilador de techo</li>
								    <li>Telefonía</li>
								    <li>TV por cable</li>
								    <li>Piscina</li>
								    <li>Pileta para niños</li>
								    <li>Hidromasaje</li>
								    <li>1 ha. de parque</li>
								    <li>Estacionamiento</li>
								    <li>Servicio de emergencias médicas</li>
								    <li>Mucama</li>
								<br>
								Direccion: 
								Av. Del Sol 715 frente al Casino Internacional Flamingo
							</div>
						</div>
					</div>
					<div id="contMapaAnuncio">
						<div id="contMapaAnuncio2">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13483.180389854373!2d-65.01729048752928!3d-32.34420994245838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95d2e165a70778d7%3A0xc29a44281588fa8a!2sParque+Y+Sol!5e0!3m2!1ses-419!2sar!4v1406070174023" width="960" height="300" frameborder="0" style="border:0"></iframe>
						</div>
					</div>

					<div id="contComentariosAnuncio">
						<div id="tituloComentarios">Comentarios.<br></div>
						<div id="contComentariosAnuncio2">
							<!--<div id="tituloComentarios">Comentarios.<br></div>-->

							<div id="contComent1" class="coment">
								<div class="contComentIzq">
									<div class="fotoUsuarioComent">
										<img src="imagenes/usuario_sin_foto.png">
									</div>
									<div class="nombreUsuarioComent">
										<p>Homero</p>
										Reputacion	<img src="imagenes/0Estrellas.gif">
									</div>
									
								</div>
								<div class="contComentDer">
									<div class="tituloComentario">
										<p>Parece mejor de lo que es</p>
									</div>
									<div class="puntuacionDada">
										<img src="imagenes/2Estrellas.gif">
									</div>
									<div class="fechaComentario">
										28 agosto 2013
									</div>
									<br>
									<div class="textoComentario">
										<p>Fui para el feriado de Agosto, con media pensión. Esta ubicado sobre Av del Sol, no en centro centro, pero igual no esta mal, sobretodo por que esta el casino cerca. El problema del hotel fue la habitación, colchón roto, la ducha andaba mal, poca calefacción... muy fea.
										El desayuno no esta mal, hay café, leche, te y jugo para tomar y medialunas y tostadas para comer, junto con manteca y mermelada.
										La cena no era muy abundante pero estaba acorde, lo que si, se quedan sin gaseosa seguido.
										Tiene un lindo jardín y entrada, creo que es lo mas destacable. </p>
									</div>
								</div>
							</div>


							<div id="contComent2" class="coment">
								<div class="contComentIzq">
									<div class="fotoUsuarioComent">
										<img src="imagenes/foto_usuario1.jpg">
									</div>
									<div class="nombreUsuarioComent">
										<p>Mr Bean</p>
										Reputacion	<img src="imagenes/4Estrellas.gif">
									</div>
									
								</div>
								<div class="contComentDer">
									<div class="tituloComentario">
										<p>Hotel Parque y Sol</p>
									</div>
									<div class="puntuacionDada">
										<img src="imagenes/5Estrellas.gif">
									</div>
									<div class="fechaComentario">
										1 junio 2014
									</div>
									<br>
									<div class="textoComentario">
										<p>Me encanto la ubicación, al alcance de todo, frente al casino, sobre la Avenida del Sol, zona comercial. El servicio de comidas fue variado, casero y con posibilidad de repetir, incluso mi hija que es vegetariana, todas las comidas eran diferentes, sabrosas y nutritivas. Las habitaciones son básicas, pero limpias y cómodas, al menos para nosotros dos estaba bien. Buena predisposición de todo el personal, sea mucamas, conserjes o ,mozos, no hay quejas al respecto, Altamente recomendable.  </p>
									</div>
								</div>
							</div>
						
						</div>

					</div>
				</div>
			</section>
		</div>

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