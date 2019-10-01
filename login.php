<!DOOCTIPE html>
<html lang ="en">
	<head>
		<meta charset="UTF-8">
		<link rel="STYLESHEET" type="text/css" href="../estilos/estilos-login.css">
		<title></title>
	</head>
	<body>
	<img class="imagenFondo" src="../imagenes/paisaje2.jpg">
		<div class="header">
			<div class="logo">
				<h1>DanyDaniHer</h1>
			</div>
			<div class="menu">
				<div class="opcionMenu">
					<p>Preguntas Frecuentes</p>
				</div>
				<div class="opcionMenu">
					<p>¿Como Comprar?</p>
				</div>
				<div class="opcionMenu">
					<p>Sobre Nosotros</p>
				</div>
			</div>
		</div>
		<div class="roll-over">
			<img class="portada" src="../imagenes/ciudad3.jpg">
		</div>
		<div class="main" id="main">
			<div class="tit">
				<h2>Iniciar Secion</h2>
			</div>
			<form method="POST" action="verificarIdentidad.php">
				<input class="text" type="text" value="Usuario" name="usuario"></input>
				<input class="text" type="password" value="Contracena" name="pass"></input>
				<input class="submit" type="submit" value="Acceder" style="cursor:hand"></input> 
			</form>
		</div>
		
		<div class="footer">
			<p class="descripcionSitio"><b>DanyDaniHer</b> <br>
			Tienda fisica: <a href="#">Calle 13 entre carrera 12 y 13 del Casco Central. Calabo#o estado Guarico. Vene#uela</a><br>
			<a href="#">Preguntas frecuentes</a> <a href="#">¿Como comprar?</a> <a href="#">Sobre Nosotros</a><br>
			<a href="#">Administrar</a></p>
			<p class="webMaster"><b>Web Master:Nad GarDe# </b><br>
			Twiter:<a href="#">@garde#nad</a><br>
			Instagram:<a href="#">@iranadgt</a><br>
			Correo:<a href="#">garde#producciones@gmail.com</a>
			</p>
		</div>
		
		
	</body>
<html>