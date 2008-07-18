<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Título de la web -->
	<title>Registro m40htnews</title>
    <!-- zona para script -->
    <script language="javascript">
		function alerta(mensaje){
			window.alert(mensaje);
		}
		function validaRegistro(formu){
			if ((formu.nusuario.value=="")||(formu.pass1.value=="")||(formu.nombre.value=="")){
				alerta("Faltan campos");
				return (false);
				}
			else{
				if (formu.pass1.value!=formu.pass2.value){
					alerta("La contraseña no es igual");
					return (false);
				}
				else{
					document.cookie="USER="+formu.usuario.value;	
					return (true);
				}
			}
			return (false);
		}	
	</script>
    <!-- fin de zona para script -->
    <!-- zona para hojas de estilos -->
    <!--<LINK HREF="css/registro.css" REL="stylesheet" TYPE="text/css"> -->
    <!-- zona para hojas de estilos -->
	<LINK HREF="css/resultados.css" REL="stylesheet" TYPE="text/css">
	<!-- fin de zona para hojas de estilos -->
    <!-- fin de zona para hojas de estilos -->
</head>

<body>
<div align="center">
<form name="formularioregistro" onSubmit='return validaRegistro(this)' action="compruebanuevousuario.php" method="post">
    <p>nombre de usuario&nbsp;&nbsp;<input name="nusuario" type="text"></p>
    <p>contraseña&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="pass1" type="password"></p>
    <p>repitela&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="pass2" type="password"></p>
    <p>tu nombre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="nombre" type="text"></p>
	<p>nombre de tu equipo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<select name="equipo">
		<?php
			$xmlDoc = new DOMDocument(); // Cargamos el fichero xml para leer
			$xmlDoc->load("./xml/m40.xml");
			$x = $xmlDoc->getElementsByTagName('nombre'); // Nombres de todos los equipos
			$teamid =$xmlDoc->getElementsByTagName('teamid'); 
			for ($i=0; $i<=$x->length-1; $i++) {
				echo '<option value="';
				echo($teamid->item($i)->nodeValue);
				echo '";>';
				echo($x->item($i)->nodeValue);
				echo "</option>";
			}
		?>
		</select>
	</p>
    <p><input type="submit" name="enviar" value="enviar"/>  </p>
</form>
  </div>
</body>
</html>
