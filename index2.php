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
				
				<?php include("menu_v.php");?>

			</div>
		</header>
		<section id="contenedor_slides">
			<?php //include("slide1.php"); ?>

			<?php //include("busquedaSlide.php"); ?>
			
		</section>

		


		<section id="wrap">
			
			<section id="main">
				

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
				<section id="contenido"><!-- PONER UN COLOR DE FONDO DEL ARTICULO UN POCO MAS CLARO QUE #87C1B2 Ó BLANCO --> 
					<?php include("textoIndex.php"); ?>
					<?php //include("crearPublicacion.php"); ?>
				</section>

				<?php include("anunciese1.php"); ?>
						
		

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