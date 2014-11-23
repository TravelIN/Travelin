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
								    <form id="form-login" action="verificacion.php" method="post" autocomplete="on">
								        <p><label for="usuario">Usuario:</label></p>
								        <p class="mb10"><input name="usuario" id="usuario" autofocus="" required="" type="text"></p>
									    <p><label for="contrasenia">Contraseña:</label></p>
									    <p class="mb10"><input name="contrasenia" id="contrasenia" required="" type="password"></p>
									    <p><a href="recuperarPass.php">¿Olvidó su contraseña?</a></p>
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
								    <form id="form-reg" action="registrar_u.php" method="post" autocomplete="off">
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