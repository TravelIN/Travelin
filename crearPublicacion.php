<script language="javascript">
	$(document).ready(function(){
		// Parametros para e combo1
	   $("#ddlProvinciaP").change(function () {
	   		$("#ddlProvinciaP option:selected").each(function () {
				//alert($(this).val());
					elegido=$(this).val();
					$.post("ddlProvincia.php", { elegido: elegido }, function(data){
					$("#ddlCiudadP").html(data);
					$("#combo3").html("");
				});			
	        });
	   })
	});
</script>

<div id="agrupFormPublic" name="agrupFormPublic">

	<h3>Creá tu anuncio</h3>
 	

	<form action="manejarPublicacion.php" method="post" enctype="multipart/form-data">
	 
	
		<label for="nombre">Nombre</label> <br/>
		<input type="text" id="nombre" name="nombre">
	    
		<br/><br/>
	 
		<label for="direccion">Direccion</label> <br/>
		<input type="text" id="direccion" name="direccion" />
		
		<br/><br/>

		<label for="descripcion">Descripción</label> <br/>
  		<textarea name="descripcion" id="descripcion" cols="40" rows="5"></textarea>
 
  		<br/><br/>

		<label for="tipoEstablecimiento">Tipo de Establecimiento</label> 
		<select id="tipoEstablecimiento" name="tipoEstablecimiento">
			<option value="0">Seleccione Tipo</option>
			<?php 
				$query1 = "SELECT idTipoEstableci, descripcion FROM tipoEstableci";
				$result1 = mysqli_query($objeConexion->conectarse(), $query1) or die(mysqli_error());;
				while($row = mysqli_fetch_array($result1)){
			?>
					<option title="<?php echo $row["descripcion"]; ?>" value="<?php echo $row["idTipoEstableci"]; ?>"> 
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
					<option title="<?php echo $row["descripcion"]; ?>" value="<?php echo $row["id"]; ?>"> 
						<?php echo $row["descripcion"]; ?> <!--<?php echo $row["descripcion"]; ?> -->
			        </option>
			<?php
				}
			?>
		</select>

		<br/><br/>

		<label for="ddlCiudadP">Ciudad</label> 
		<select id="ddlCiudadP" name="ddlCiudadP">
			<option value="0">Elija una ciudad</option>
		</select>

		<br/><br/>

		<input type="submit" id="btnCrear" name="btnCrear" value="Crear" />
		<input type="reset" id="btnCancelar" name="btnCancelar" value="Cancelar" />
	 	<br/><br/><br/>
	</form>

</div>