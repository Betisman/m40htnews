<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>
	<!-- zona para hojas de estilos -->
	<LINK HREF="css/resultados.css" REL="stylesheet" TYPE="text/css">
	<!-- fin de zona para hojas de estilos -->
<?php
	$j=$_REQUEST['jornada'];
	$j=$j-1;
?>
  <title>resultados de la jornada <?php echo ($j+1); ?></title>
</head>
<body>
<?php
	if (($j>=0)&&($j<7)){
		$xmlDoc = new DOMDocument(); // Cargamos el fichero xml para leer
		$xmlDoc->load("xml/partidosliga.xml");
		$jornada =  $xmlDoc->getElementsByTagName('jornada');
		$jornadauso = $jornada->item($j);
		$local = $jornadauso->getElementsByTagName('local'); // Nombres de todos los equipos
		$localteamid =$jornadauso->getElementsByTagName('localteamid');
		$localgol = $jornadauso->getElementsByTagName('localgol');
		$visigol = $jornadauso->getElementsByTagName('visigol');
		$visi = $jornadauso->getElementsByTagName('visitante'); // Nombres de todos los equipos
		$visiteamid =$jornadauso->getElementsByTagName('visitanteteamid');
?>
<h2 align="center">jornada <?php echo ($j+1); ?></h2>
		<table align="center" border="1" cellpadding="2" cellspacing="2">
		<tbody>
			<tr>
				<td>Local</td>
				<td>&nbsp; </td>
				<td>&nbsp; </td>
				<td>Visitante</td>
			</tr>
<?php
		 for ($h=0; $h<=$local->length-1; $h++) {
			echo "<tr><td>";
			echo($local->item($h)->nodeValue);
			echo "</td><td>";
			echo ($localgol->item($h)->nodeValue);
			echo "</td><td>";
			echo($visigol->item($h)->nodeValue);
			echo "</td><td>";
			echo($visi->item($h)->nodeValue);
			echo "</td>";
			echo "</tr>";
			}
?>
		</tbody>
		</table>
	<p align="center"><a href="resultados.php">jornadas</a></p>
<?php
	}else{
?>
	<h3>Jornadas disponibles</h3>
	<ul>
		<li><a href="resultados.php?jornada=1">jornada 1</a></li>
		<li><a href="resultados.php?jornada=2">jornada 2</a></li>
	</ul>
<?php
	}
?>

</body>

</html>