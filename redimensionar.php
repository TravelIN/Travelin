 <?php
    //Ruta de la original
    $rtOriginal="/images/example.jpg";
         
    //Crear variable de imagen a partir de la original
    $original = imagecreatefromjpeg($rtOriginal);
         
    //Definir tamaño máximo y mínimo
    $max_ancho = 150;
    $max_alto = 150;
     
    //Recoger ancho y alto de la original
    list($ancho,$alto)=getimagesize($rtOriginal);
     
    //Calcular proporción ancho y alto
    $x_ratio = $max_ancho / $ancho;
    $y_ratio = $max_alto / $alto;

    /*********************************************************
    Con esto ya tenemos los datos para mantener las proporciones de la imagen. Ahora toca calcular el tamaño:
    **********************************************************/
        
    if(($ancho <= $max_ancho) && ($alto <= $max_alto))
    {
        //Si es más pequeña que el máximo no redimensionamos
        $ancho_final = $ancho;
        $alto_final = $alto;
    }
    //si no calculamos si es más alta o más ancha y redimensionamos
        elseif (($x_ratio * $alto) < $max_alto)
        {
            $alto_final = ceil($x_ratio * $alto);
            $ancho_final = $max_ancho;
        }else
            {
                $ancho_final = ceil($y_ratio * $ancho);
                $alto_final = $max_alto;
            }

    /***********************************************************
    Con esto ya tenemos el tamaño de la imagen con las proporciones guardadas. Finalmente nos queda crear la imagen y guardarla:
    ************************************************************/
        
    //Crear lienzo en blanco con proporciones
    $lienzo=imagecreatetruecolor($ancho_final,$alto_final);
     
    //Copiar $original sobre la imagen que acabamos de crear en blanco ($tmp)
    imagecopyresampled($lienzo,$original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
     
    //Limpiar memoria
    imagedestroy($original);
     
    //Definimos la calidad de la imagen final
    $cal=90;
     
    //Se crea la imagen final en el directorio indicado
    imagejpeg($lienzo,"./images/thumb.jpg",$cal);

    /*************************************************************
    Todo el cálculo, por otra parte, es necesario sólo si quieres mantener la proporción, si no la cosa queda más sencilla:
    **************************************************************/
        
    //Ruta de la original
    $rtOriginal="/images/example.jpg";
         
    //Crear variable de imagen a partir de la original
    $original = imagecreatefromjpeg($rtOriginal);
         
    //Definir tamaño máximo y mínimo
    $ancho_final = 150;
    $alto_final = 150;
     
    //Recoger ancho y alto de la original
    list($ancho,$alto)=getimagesize($rtOriginal);
     
    $lienzo=imagecreatetruecolor($ancho_final,$alto_final);
     
    //Copiar $original sobre la imagen que acabamos de crear en blanco ($tmp)
    imagecopyresampled($lienzo,$original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
     
    //Limpiar memoria
    imagedestroy($original);
     
    //Definimos la calidad de la imagen final
    $cal=90;
     
    //Se crea la imagen final en el directorio indicado
    imagejpeg($lienzo,"./images/thumb.jpg",$cal);
?> 