<?php
	// Conexion, seleccion de base de datos
	$enlace = mysql_connect('localhost', 'jovmivwo_web', 'm40htnews') or die('No pudo conectarse : ' . mysql_error());
	echo 'Conexi&oacute;n exitosa';
	mysql_select_db('jovmivwo_molinete');
?>