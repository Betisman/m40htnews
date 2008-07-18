<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>ThePiso</title>
    <link rel="stylesheet" href="css/menu.css" type="text/css"/> 
    <style type="text/css">
<!--
.Estilo1 {color: #FFFFFF}
-->
    </style>
</head>

<body>
	<div class="logoequipo">
    	<div class="imagenlogoequipo">
    		<img src="images/BannerThepiso.png" alt="ThePiso">        </div>
<div class="nombreEquipoLogo">
            	<p class="listaequipo"><h4>ThePiso</h4></p>
                <p class="listaequipo Estilo1">España IX.933</p>
                <p class="listaequipo">Estadio Coliseo Alejandro Casona (12010)</p>
        </div>
        <?php
			function get_dato($string, $start, $end){
			$string = " ".$string;
			$ini = strpos($string,$start);
			if ($ini == 0) return "";
				$ini += strlen($start);   
				$len = strpos($string,$end,$ini) - $ini;
				return substr($string,$ini,$len);
			}
			// Intento de parsear una plantilla de un equipo de ht
			$texto='<A HREF="playerDetails.asp?playerID=159191430">Camilo  Vaz</A> &nbsp;<a href="bookmarks.aspx?actionType=add&bookmarkTypeID=2&ObjectID=159191430"><img src="img.axd?res=Icons&img=bookmarks.gif" title="Añadir este jugador a tus favoritos"/></a>&nbsp;<BR>';
			$id= get_dato($texto,'playerDetails.asp?playerID=','">');
			echo '<br>';
			echo '<br>';
			echo '<br>';
			echo '<br>';
			echo '<br>';
			echo '<br>';
			echo '<br>';
			echo '<br>';
			echo '<br>';
			echo '<br>';
			echo '<br>';
			echo $id;
			?>
            <a href="incorporajugadores.html" target="_blank">añadeJugadores</a>
</div>
</body>
</html>
