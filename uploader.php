<?php
	$nombre_archivo = $_FILES['userfile']['name'];
	$tipo_archivo = $_FILES['userfile']['type'];
	$tamano_archivo = $_FILES['userfile']['size'];
	//compruebo si las características del archivo son las que deseo
	if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg")) && ($tamano_archivo < 100000000000000))) {
	    echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .gif o .jpg<br><li>se permiten archivos de 100 Kb máximo.</td></tr></table>";
	}else{
	    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $nombre_archivo)){
	       echo "El archivo ha sido cargado correctamente.";
	    }else{
	       echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
	    }
	}
/*
	$target_path = "uploads/";

	$target_path = $target_path.basename($_FILES['uploadedfile']['name']);

	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path))
	{
		echo "El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido";
	}else
		{
			echo "Ha ocurrido un error, trate de nuevo!";
		}
*/
?>