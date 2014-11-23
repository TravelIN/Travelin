<section id="busqueda">
<!--
				<div id="fondoAgrupadorBusqueda"></div>
-->
				<div id="agrupadorBusqueda">
					<form id="buscarDestino" method="POST" action="resulBusquedaBase.php">
<!--						<label class="labelFormBusqueda">Provincia:	</label>-->
						
						<select class="dropDownlist" name="ddlProvincia" id="ddlProvincia">
							<option value="0">Elija una provincia</option>
							<?php 
								$query = "SELECT PR.id, PR.descripcion FROM provincia PR INNER JOIN pais PA ON PR.idPais = PA.id WHERE PA.codAlfa LIKE 'ARG'";
								$result = mysqli_query($objeConexion->conectarse(), $query) or die(mysqli_error());;
								while($row = mysqli_fetch_array($result)){
							?>
									<option title="<?php echo utf8_encode($row["descripcion"]); ?>" value="<?php echo $row["id"]; ?>"> 
										<?php echo utf8_encode($row["descripcion"]); ?>
		                            </option>
							<?php
								}
							?>

						</select>
<!--						<br>

						<label class="labelFormBusqueda">Ciudad: </label>-->
						<select class="dropDownList" name="ddlCiudad" id="ddlCiudad">
							<option value="0">Elija una ciudad</option>
						</select>
						

<!--						<label class="labelFormBusqueda">Rubro: </label>-->
						<select class="dropDownList" name="ddlProveedor" id="ddlProveedor">
							<option value="0">Elija un rubro</option>
							<?php 
								$query3 = "SELECT * FROM tipoEstableci";
								$result3 = mysqli_query($objeConexion->conectarse(), $query3) or die(mysqli_error());;
								while($row3 = mysqli_fetch_array($result3)){
							?>
									<option title="<?php echo utf8_encode($row3["descripcion"]); ?>" value="<?php echo $row3["idTipoEstableci"]; ?>"> 
										<?php echo utf8_encode($row3["descripcion"]); ?>
		                            </option>
							<?php
								}
							?>
						</select>
						<!--
						<input type="text" id="txtDestino" placeholder="Busqueda por ciudad, provincia">
						-->
						<!--<input type="button" id="btnBuscar" value="Buscar" onclick="location.href='busqueda.php'">-->
						<input type="submit" name="btnBuscar" id="btnBuscar" value="Buscar">
						

					</form>
				</div>
			</section>