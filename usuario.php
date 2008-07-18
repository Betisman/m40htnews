<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>validacion de usuario</title>
</head>
<body>
	<?php
		$usuario = $_POST['usuario'];
		$pass = $_POST['password'];
		include ("conexion.php");
	if ($_POST['usuario']) {
		//Comprobacion del envio del nombre de usuario y password
		if ($pass==NULL) {
		echo "La password no fue enviada";
		}else
		{
			$sql ="SELECT nusuario,password FROM usuarios WHERE nusuario = '$usuario'";
			$query = mysql_query($sql);
			$data = mysql_fetch_array($query);
			if($data['password'] != $pass) {
				include ("desconexion.php");
				echo "Login incorrecto";
				header("Location: login.html");
			}
			else{
				session_start(); // Iniciar sesión
				session_regenerate_id();
				$_SESSION["nombre"] = $row['usuario'];
				$_SESSION['PERMITIDO'] = "SI";
				include ("desconexion.php");
				echo "Has sido logueado correctamente ".$_SESSION['nombre']." y puedes acceder a inicio.php.";
				header("Location: quiniela.php");
			}
		}
	}
	?>
</body>
</html>
