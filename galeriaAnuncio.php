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

<!--***********************************************************************
************************************************************************-->

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

					<?php

						echo('<form id="formSubeImg" name="formSubeImg" enctype="multipart/form-data" action="uploader.php" method="POST">');

						echo ('<input type="file" id="fileAnuncio" name="fileAnuncio" ');

						echo ('<br> <input type="submit" value="Subir"> </form> ');


					?>
					
<!--
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
							
						</div>
					</div>
-->					
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