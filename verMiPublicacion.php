<script language="javascript">
	$(document).ready(function(){
		// Parametros para e combo1
	   $("#ddlProvinciaP").ready(function () {
	   		$("#ddlProvinciaP option:selected").each(function () {
				//alert($(this).val());
				//alert('1');
					elegido=$(this).val();
					elegCiudad = $('#ciuEleg').val();
					$.post("ddlProvincia2.php", { elegido: elegido, elegCiudad: elegCiudad }, function(data){
					$("#ddlCiudadP").html(data);
					$("#combo3").html("");
				});			
	        });
	   });
	});
</script>

<div id="agrupFormPublic" name="agrupFormPublic">

	<h3>Mí anuncio.</h3>
 	<?php include ("miEstableci.php"); ?>

	<form action="actualizarMiPublicacion.php" method="post" enctype="multipart/form-data">
	 
	
		<label for="nombre">Nombre</label> <br/>
		<input type="text" id="nombre" name="nombre" value="<?php echo $nombre ?>">
	    
	    <input type="hidden" id="idEstableci" name="idEstableci" value="<?php echo $idEstableci ?>">
	    <input type="hidden" id="ciuEleg" name="ciuEleg" value="<?php echo $ciudad ?>">
		<br/><br/>
	 
		<label for="direccion">Direccion</label> <br/>
		<input type="text" id="direccion" name="direccion" value="<?php echo $direccion ?>" />
		
		<br/><br/>

		<label for="descripcion">Descripción</label> <br/>
  		<textarea name="descripcion" id="descripcion" cols="40" rows="5" ><?php echo $descripcion ?></textarea>
 
  		<br/><br/>

		<label for="tipoEstablecimiento">Tipo de Establecimiento</label> 
		<select id="tipoEstablecimiento" name="tipoEstablecimiento">
			<option value="0">Seleccione Tipo</option>
			<?php 
				$query1 = "SELECT idTipoEstableci, descripcion FROM tipoEstableci";
				$result1 = mysqli_query($objeConexion->conectarse(), $query1) or die(mysqli_error());;
				while($row = mysqli_fetch_array($result1)){
			?>
					<option title="<?php echo $row["descripcion"]; ?>" value="<?php echo $row["idTipoEstableci"]; ?>" <?php 
																														if($row["idTipoEstableci"] == $tipoEstablecimiento)
																														{
																															echo ("selected");
																														}
																														?> > 
						<?php echo $row["descripcion"]; ?> <!--<?php echo $row["descripcion"]; ?> -->
			        </option>
			<?php
				}
			?>
		</select>

		<br/><br/>

		<label for="ddlProvinciaP">Provincia</label> 
		<select id="ddlProvinciaP" name="ddlProvinciaP">
			<option value="0">Elija una provincia</option>
			<?php 
				$query = "SELECT PR.id, PR.descripcion FROM provincia PR INNER JOIN pais PA ON PR.idPais = PA.id WHERE PA.codAlfa LIKE 'ARG'";
				$result = mysqli_query($objeConexion->conectarse(), $query) or die(mysqli_error());;
				while($row = mysqli_fetch_array($result)){
			?>
					<option title="<?php echo utf8_encode($row["descripcion"]); ?>" value="<?php echo $row["id"]; ?>" <?php 
																											if($row["id"] == $provincia)
																											{
																												echo ("selected");
																											}
																											?> > 
						<?php echo utf8_encode($row["descripcion"]); ?> <!--<?php echo $row["descripcion"]; ?> -->
			        </option>
			<?php
				}
			?>


		</select>

		<br/><br/>

		<label for="ddlCiudadP">Ciudad</label> 
		<select id="ddlCiudadP" name="ddlCiudadP" >
			<option value="0">Elija una ciudad</option>
		</select>

		<br/><br/>

		<input type="submit" id="btnGuardar" name="btnGuardar" value="Guardar" />
		<input type="button" id="btnBaja" name="btnBaja" value="Eliminar Establecimiento" onclick="location.href='bajaPublic.php?estableci=<?php echo ($idEstableci); ?>'" />
	 	<br/><br/><br/>
	</form>

</div>