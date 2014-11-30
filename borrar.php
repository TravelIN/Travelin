<?php
	
	//echo date();
	$fecha=date('d-m-Y/H:i:s');
	echo "<br/>";
	echo ($fecha);
	echo "<br/>";
	echo ("con sha1      = ".sha1($fecha));
	echo "<br/>";
	echo ("con md5       = ".md5($fecha));
	echo "<br/>";
	echo ("con md5(sha1) = ".md5(sha1($fecha)));
	echo "<br/>";
	echo ("con sha1(md5) = ".sha1(md5($fecha)));

	echo "<br/>";
	echo "<br/>";
	echo ("con sha1      = ".sha1($fecha."hola mundo lalallalalalaallalalallaallalala"));
	echo "<br/>";
	echo ("con md5       = ".md5($fecha."hola mundo"));
	echo "<br/>";
	echo ("con md5(sha1) = ".md5(sha1($fecha."hola mundo")));
	echo "<br/>";
	echo ("con sha1(md5) = ".sha1(md5($fecha."hola mundo")));


	echo "<br/><br/>";
	$algo = date(d-m-Y_H_i_s);
	echo $algo;


?>