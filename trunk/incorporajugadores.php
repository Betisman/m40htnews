<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Incorpora tus jugadores</title>
</head>

<body>
	<?php
        $texto=$_REQUEST['procesado'];
        echo '<br>';
        function get_dato($string, $start, $end){
			$string = " ".$string;
			$ini = strpos($string,$start);
			if ($ini == 0) return "";
				$ini += strlen($start); 
				$len = strpos($string,$end,$ini) - $ini;
				$posicion = strpos($string,$end);
				$resultado =substr($string,$ini,$len);
				//echo $string;
				return array ($resultado, substr($string,$ini +$len));
		}
		$texto= strip_tags($texto,'<a>');
		list ($id, $texto) = get_dato($texto,'playerDetails.asp?playerID=','>');
		echo $id;
		echo '<br>';
		list ($nombre, $texto) = get_dato($texto,'>','TSI');
		echo $nombre;
		echo '<br>';
		list ($TSI, $texto) = get_dato($texto,'TSI = ',',');
		echo $TSI;
		echo '<br>';
		echo $texto;
		//$nombre = strip_tags($texto,'<a>'); 
		//echo $nombre;
		?>
</body>
</html>
