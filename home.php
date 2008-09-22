<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>m40 htnews</title>
    <!-- css para el menu, más o menos el ht -->
    <link rel="stylesheet" href="css/menu.css" type="text/css"/> 
    <!-- Funcionalidad de ajax -->
    <script language="javascript" type="text/javascript" src="script/ajax.js"></script>
</head>

<body>
	<h1>MENU</h1>
	<div class="menu">
    	<div class="level1"><a href="home.php">m40 htnews</a></div>
      	<div class="level2"><a href="javascript:llamarasincrono('ligam40.php', 'cuerpo');">liga m40</a></div>
        <div class="level2"><a href="javascript:llamarasincrono('copam40.php', 'cuerpo');">copa m40</a></div>
        <div class="level2"><a href="javascript:llamarasincrono('equipos.php', 'cuerpo');">equipos</a></div>
        <div class="level3"><a href="javascript:llamarasincrono('equipogenerico.php', 'cuerpo');">equipoGenerico</a></div>
        <div class="level2"><a href="javascript:llamarasincrono('juveniles.php', 'cuerpo');">juveniles</a></div>
        <div class="level3"><a href="javascript:llamarasincrono('miniligam40.php', 'cuerpo');">miniliga m40</a></div>
        <div class="level3"><a href="javascript:llamarasincrono('eqjuveniles.php', 'cuerpo');">equipos</a></div>
    </div>
    <h1>COMUNIDAD</h1>
	<div class="menu">
    	<div class="level1"><a href="http://groups.google.com/m40htnews/">grupo google</a></div>
        <div class="level1"><a href="http://www.cupmanager.org">cupmanager</a></div>
        <div class="level1"><a href="javascript:llamarasincrono('reuniones.php', 'cuerpo');">reuniones</a></div>
        <div class="level1"><a href="javascript:llamarasincrono('trofeos.php', 'cuerpo');">trofeos</a></div>
        <div class="level2"><a href="javascript:llamarasincrono('IntrPitis.php', 'cuerpo');">Internacional de Pitis</a></div>
    </div>
    <div class="menu" id="login">
    	<h1>INGRESO</h1>
        <form action="javascript:llamarasincrono('reuniones.php', 'cuerpo');" method="post" name="loginingreso">
        	<input name="Usuario" type="text" size="16" maxlength="50" class="campoformulario">
        	<input name="Contrase&ntilde;a" type="password" size="16" maxlength="50" class="campoformulario">
            <input name="enviar" type="submit" value="enviar" class="campoformulario" id="botonenviar">
            <input name="borrar" type="reset" value="borrar" class="campoformulario" id="botonborrar">
        </form>
    </div>
    <div class="principal">
    	<div class="top">
        	<img src="images/topm40.png" alt="top">
        </div>
        <div id="cuerpo">
        	<br>
            <blockquote>
            	<h2>Bienvenido a nuestra liga de <a href="http://www.hattrick.org">Hattrick</a></h2>
             	<p>Ésta es una liga para jugar entre amigos y colegas dueños de equipos de 
                	<a href="http://www.hattrick.org">Hattrick</a>. Espermos que disfrutes de esta página.
                </p>
            </blockquote>
            <p align="center"><img src="images/m40.png" alt="logo m40 htnews"></p>
      	</div>
    </div>
</body>
</html>
