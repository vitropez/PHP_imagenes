<?php
		
	$ancho=650/2;
	$alto=488/2;
	 	
	$fondo = imagecreatetruecolor(650,488);
	$imagen_1= imagecreatefromjpeg('imagen1.jpg');
	$imagen_2= imagecreatefromjpeg('imagen2.jpg');
	$imagen_3= imagecreatefromjpeg('imagen3.jpg');
	$imagen_4= imagecreatefromjpeg('imagen4.jpg');
	$imagen1 = imagescale($imagen_1,$ancho,$alto);
	$imagen2 = imagescale($imagen_2,$ancho,$alto);	
	$imagen3 = imagescale($imagen_3,$ancho,$alto);
	$imagen4 = imagescale($imagen_4,$ancho,$alto);
	
  imagecopy($fondo,$imagen1,0,0,0,0,$ancho,$alto);
  imagecopy($fondo,$imagen2,325,0,0,0,$ancho,$alto);	
  imagecopy($fondo,$imagen3,0,244,0,0,$ancho,$alto);	
  imagecopy($fondo,$imagen4,325,244,0,0,$ancho,$alto);
  
	header("Content-type: image/jpeg");
	imagejpeg($fondo);

?>