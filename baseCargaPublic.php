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
		<script type="text/javascript" src="select_dependientes2.js"></script>
		<!--<script type="text/javascript" src="select_dependientes2.js"></script>-->

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
<!--		
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
		
			});
		</script>
-->

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
			<?php //include("slide1.php"); ?>

			<?php //include("busquedaSlide.php"); ?>
			
		</section>

		


		<section id="wrap">
			
			<section id="main">
				

				<section id="contenido"><!-- PONER UN COLOR DE FONDO DEL ARTICULO UN POCO MAS CLARO QUE #87C1B2 Ó BLANCO --> 
					<?php //include("textoIndex.php"); ?>
					<?php 
						//include("crearPublicacion.php");
						include("verMiPublicacion.php");
					?>
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