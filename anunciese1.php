				<aside>
					<section class="widget">	
						<div id="textoAnunciese">
							<h3>¿Tenes un negocio y queres que más gente lo conosca?</h3>
							<p>TravelIN es tú mejor opción.</p>
							<h3>¿Por que?</h3><p>Porque TravelIN te permite publicarlo totalmente gratis y que más turistas puedan conocerlo, calificarlo
							y recomendarselo a sus amigos. </p>
						</div>
						<div id="imagenAnunciese">
	
						<?php 

							if(isset($_SESSION['idUsuario']))
							{
								echo ('<a href="baseCargaPublic.php"><img id="imagPublica" src="imagenes/publicaAnuncio.png"></a>');
							}else
								{
						?>
									<script type="text/javascript">
										function confirm_alert()
										{
											alert("Debe estar logueado para crear un anuncio.");
										}
									</script>
									
									<a href="#" onclick="confirm_alert();"><img id="imagPublica" src="imagenes/publicaAnuncio.png"></a>
						<?php
								}
						?>

						</div>
					</section>
				</aside>