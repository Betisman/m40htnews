<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>
  <title>Página de prueba para xml</title>
</head>

<body>
<?php
	$xmlDoc = new DOMDocument(); // Cargamos el fichero xml para leer
	$xmlDoc->load("./xml/partidosliga.xml");
	$x = $xmlDoc->getElementsByTagName('jornada'); // cogemos los elementos por jornadas
	for ($i=0; $i<=$x->length-1; $i++) {
		echo($x->item($i)->local->nodeValue);
		echo "<br>";
		echo($x->item($i)->visitante->nodeValue);
        echo "<hr>";
	}
    $xmlDoc = new DOMDocument(); // Cargamos el fichero xml para leer
	$xmlDoc->load("./xml/partidosliga.xml");
	$x = $xmlDoc->getElementsByTagName('local'); // Nombres de todos los equipos
	$xteamid =$xmlDoc->getElementsByTagName('localteamid');
    $y = $xmlDoc->getElementsByTagName('visitante'); // Nombres de todos los equipos
	$yteamid =$xmlDoc->getElementsByTagName('visitanteteamid');
	    for ($i=0; $i<=$x->length-1; $i++) {
	        echo($x->item($i)->nodeValue);
            echo($xteamid->item($i)->nodeValue);
            echo "<br>";
            echo($y->item($i)->nodeValue);
            echo($yteamid->item($i)->nodeValue);
            echo "<hr>";
		}
?>
</body>

</html>