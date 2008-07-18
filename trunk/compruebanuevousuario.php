<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Comprueba nuevo usuario</title>
</head>

<body>
	<?php
		session_start();
		$nusuario = $_REQUEST['nusuario'];
		$password =$_REQUEST['pass1'];
		$nombre=$_REQUEST['nombre'];
		$equipo=$_REQUEST['equipo'];
		echo $nusuario;
		include ("conexion.php");
		$sql="INSERT INTO  jovmivwo_molinete.usuarios(nombre,nusuario,password,equipo)VALUES('$nombre','$nusuario','$password','$equipo')";		
		if ($query = mysql_query($sql))
		{
			echo "Registro correcto";
			header('Location: index.html');	
		}
		else 
		{
			echo "Registro incorrecto";
			echo $equipo;
			//header('Location: error.html');	
		}
		include ("desconexion.php");
		
    ?>
</body>
</html>
