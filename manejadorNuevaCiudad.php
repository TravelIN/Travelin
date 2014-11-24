<?php
	include 'coneccion.php';
	
	$db = new Conexion();
	
	$provincia = $_POST['ddlProvinciaN'];
	$ciudad = strtolower($_POST['txtCiudad']);

	$existe = 0;
	
	$sql0 = 'SELECT * FROM ciudad WHERE idProvincia = '.$provincia;
	
	if(!$resultado = mysqli_query($db->conectarse(), $sql0))
	{
	    echo('Ocurrio un error ejecutando el query [' . mysqli_error() . ']');
	}else
		{
			while($fila = mysqli_fetch_assoc($resultado))
			{
				$descMinusc = strtolower($fila['descripcion']);

				//echo ($descMinusc." ".$fila['descripcion']." ".$ciudad."  ");
				//if ($descMinusc == $ciudad){echo("iguales"); $existe=1;}else{echo("distintos");}
				if(strcmp($descMinusc, $ciudad) == 0)
				{
					//echo("iguales");
					$existe=1;
				}else
					{
						//echo("distintos");
					}
				//echo ("  ".$existe."<br>");
/*
				echo '<script language="javascript">';
					echo 'alert('.strcmp($descMinusc, $ciudad).' desc='.$descMinusc.' , ciu='.$ciudad.');';
					echo 'alert($existe);';
					echo '</script>';

				if((strcmp($descMinusc, $ciudad)) == 0)
				{
					echo '<script language="javascript">';
					echo 'alert("compara");';
					echo '</script>';
					$existe = 1;
				}
*/
			}

			if($existe == 0)
			{
/*
				echo '<script language="javascript">';
					echo 'alert("Entró por no existe");';
					echo '</script>';

					echo ($descMinusc);
*/
				
				$sql1 = 'INSERT INTO ciudad (descripcion, idProvincia) VALUES ("'.ucwords($ciudad).'", "'.$provincia.'")';

				if(!mysqli_query($db->conectarse(), $sql1))
				{
					echo('Ocurrio un error ejecutando el query de insert[' . mysqli_error() . ']');
				}
				
			}else
				{
					echo '<script language="javascript">';
					echo 'alert("Ya existe una ciudad con ese nombre en esa provincia");';
					echo '</script>';
				}

			echo '<html><head></head><body>';
			echo '<script language="javascript">';
			echo 'window.location="baseCargaPublic.php"';
			echo '</script>';
			echo '</body></html>';
	
		}

?>