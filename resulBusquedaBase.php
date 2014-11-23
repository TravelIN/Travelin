<?PHP
	session_start();
	include 'coneccion.php';
	$objeConexion = new Conexion();
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
		<script type="text/javascript" src="select_dependientes.js"></script>

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
		<script language="javascript">
			$(document).ready(function(){
				// Parametros para e combo1
			   $("#ddlProvincia").change(function () {
			   		$("#ddlProvincia option:selected").each(function () {
						//alert($(this).val());
							elegido=$(this).val();
							$.post("ddlProvincia.php", { elegido: elegido }, function(data){
							$("#ddlCiudad").html(data);
							$("#combo3").html("");
						});			
			        });
			   })
				// Parametros para el combo2
				//$("#ddlCiudad").change(function () {
			   	//	$("#ddlCiudad option:selected").each(function () {
						//alert($(this).val());
				//			elegido=$(this).val();
				//			$.post("ddlCiudad.php", { elegido: elegido }, function(data){
				//			$("#combo3").html(data);
				//		});			
			    //  });
			   //})
			});
		</script>


		<title>TravelIN</title>

	</head>

	<body>
		<header>
			<div id="subheader">
				<div id="logotipo"><a href="index.php"><p><img src="imagenes/Logo_TravelIN.png"></a></p></div>
				
				<?php 

					if(isset($_SESSION['idUsuario']))
					{
						//echo ("verdadero");
						include("menu_u.php");
					}else
						{
							//echo ("falso");
							include("menu_v.php");
						}
				?>

			</div>
		</header>
		<section id="contenedor_slides">
			<?php include("slide1.php"); ?>

			<?php include("busquedaSlide.php"); ?>
			
		</section>

		


		<section id="wrap">
			
			<section id="main">
				

				<section id="contenido"><!-- PONER UN COLOR DE FONDO DEL ARTICULO UN POCO MAS CLARO QUE #87C1B2 Ó BLANCO --> 
					<?php include("resulBusqueda1.php"); ?>
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
				</section>

				<?php include("anunciese1.php"); ?>
						
<!--
						<ul>
							<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
							<li><a href="#">Nullam et est in enim gravida.</a></li>
							<li><a href="" f="#">Curabitur interdum nisi sed.</a></li>
							<li><a href="#">Nam sodales augue posuere.</a></li>
							<li><a href="#">Curabitur vehicula ligula.</a></li>

						</ul>
-->						
					
<!--
					<section class="widget">
						<h3>Articulos Recientes</h3>
						<img src="imagenes/publicidad.png" />
					</section>
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
	<?PHP
		//mysqli_close($objeConexion);
	?>

</html>