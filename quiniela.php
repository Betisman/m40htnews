<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>quiniela</title>
    <?php
		session_start(); // Localizar sesión
		if ($_SESSION["PERMITIDO"]!= 'SI'){
			echo "No está permitida su presencia en esta página"; 
			session_destroy();
			header("Location: home.php");
		}
		else{
			$acceso = $_SESSION["PERMITIDO"];
			// Acceso permitido
		}
	?>
</head>

<body>
	<div class="menujornadas">
    </div>
    <div class="cuerpoquiniela">
    	<?php
		?>
    </div>
</body>
</html>
