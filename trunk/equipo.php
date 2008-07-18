<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Equipos</title>
<link href="css/equipos.css" rel="stylesheet" type="text/css">
</head>

<body class="twoColFixRtHdr">
<?php
	$equipo = $_REQUEST['equipoid'];
	$nombreEquipo = "";
?>
    <div id="container">
      <div id="header">
        <h1><?php echo $nombreEquipo;?></h1>
      <!-- end #header --></div>
      <div id="sidebar1">
        <h3><?php echo $nombreEquipo;?></h3>
        <p>
        	<?php
				$resumen = "";
				echo $resumen;
			?>
        </p>
        <ul>
        	<li><a href="http://www.hattrick.org/Common/TeamDetails.asp?TeamID=<?php echo $equipo;?>"><?php echo $nombreEquipo;?></a></li>
        </ul>
      <!-- end #sidebar1 --></div>
      <div id="mainContent">
        <h1> Contenido principal </h1>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero.</p>
        <h2>Encabezado de nivel H2 </h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</p>
    	<!-- end #mainContent --></div>
    	<!-- Este elemento de eliminación siempre debe ir inmediatamente después del div #mainContent para forzar al div #container a que contenga todos los elementos flotantes hijos --><br class="clearfloat" />
      <div id="footer">
        <p>Pie
</p>
      <!-- end #footer --></div>
    <!-- end #container --></div>
    </body>
</html>
