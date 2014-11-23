<?php 
	//session_destroy();
	session_start();

	include 'coneccion.php';
	
	$db = new Conexion();

	$idUsuario = $_SESSION['idUsuario'];
	//$idUsuario = 2;
	$idEstableci = $_POST['idEstableci'];
	$nombre = $_POST['nombre'];
	$direccion = $_POST['direccion'];
	$descripcion = $_POST['descripcion'];
	$tipoEstablecimiento = $_POST['tipoEstablecimiento'];
	//$provincia = $_POST['ddlProvinciaP'];
	$ciudad	= $_POST['ddlCiudadP'];
/*
	$sql1 = 'SELECT * FROM establecimiento WHERE idEstableci = "'.$idEstableci.'"';

	$result = mysqli_query($db->conectarse(), $sql1) or die(mysqli_error());

	$row = mysqli_fetch_array($result);

	//echo ($row['idUsuario']);
	if($row['idUsuario'] == $idUsuario)
	{
*/
	$sql1 = 'UPDATE establecimiento SET nombre="'.$nombre.'", direccion="'.$direccion.'", descripcion="'.$descripcion.'", idTipoEstableci='.$tipoEstablecimiento.', idCiudad='.$ciudad.' WHERE idEstableci='.$idEstableci.' AND idUsuario='.$idUsuario;
	
	if(!mysqli_query($db->conectarse(), $sql1))
	{
		    echo('Ocurrio un error ejecutando el query [' . mysqli_error() . ']');
		    //echo('nom= '.$nombre.' , direc= '.$direccion.', desc='.$descripcion.', idus='.$idUsuario.', tipoest='.$tipoEstablecimiento.', ciud='.$ciudad.', prov='.$provincia);
	}else
		{
			echo '<html><head></head><body>';
			echo '<script language="javascript">';
			echo 'window.location="index.php"';
			//echo 'window.location="detalles_publicacion.php"';
			echo '</script>';
			echo '</body></html>';
		}

?>