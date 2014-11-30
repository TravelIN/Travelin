<?php 
	$db2 = new Conexion();

	if(isset($_SESSION['idUsuario']))
	{
		$idUsuario = $_SESSION['idUsuario'];
	}else
		{
			$idUsuario = 0;
		}

	$lugar=$_GET['lugar'];

	$sql0 = 'SELECT * FROM fotoestableci WHERE idEstableci='.$lugar;

	if(!$cons = mysqli_query($db2->conectarse(), $sql0))
	{
	    echo('Ocurrio un error ejecutando el query [' . mysqli_error() . ']');
	}else
		{
			while($fotos=mysqli_fetch_array($cons))
			{
				echo '<div class="contImag"><img src="'.$fotos["urlFotoEstableci"].'" class="imgFotoGaleria"></div>';
			}
		}

	//echo $lugar;



?>