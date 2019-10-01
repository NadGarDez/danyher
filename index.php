<!DOOCTIPE html>
<html lang ="en">
	<head>
		<meta charset="UTF-8">
		<link rel="STYLESHEET" type="text/css" href="estilos-index.css">
		<title></title>
	</head>
	<body id="body">
	<img class="imagenFondo" src="imagenes/paisaje2.jpg">
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
			<img class="portada" id="portada" src="imagenes/paisaje.jpg">
		</div>
		<div class="main" id="main">
			<form>
				<input type="text"></input>
			</form>
			<div class="boton-submit" style="cursor:hand" onclick="mostrar_campo_de_busqueda()">
				<p>Buscar</p>
			</div>
			<?php 
				include "php/mostrar_articulos.php";
			?>
			<div class="resultados_busqueda" id="resultados_busqueda">
				<h3 class="tit">Resultados para: </h3>
				<div class="simbolo" onclick="ocultar_campo_de_busqueda()" style="cursor:hand">Volver</div>
				<div class="preloader" id="preloader"></div>
			</div>
		</div>
		<div class="carrito">
			<div class="tit">
				<H3>Carrito</H3>
			</div>
			<div class="unidad-d-pedido">
				<div class="foto">
					
				</div>
				<div class="descripcion">
					<p><b>Nombre</b></p>
					<p>Marca</p>
					<p>Presio</p>
					<p>Presio grupo</p>
					<div class="editar">
						<p>Editar</p>
					</div>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="descripcionSitio">
				<h3 class="tit">DanyHer CA.</h3>
				<p>Tienda fisica: <a href="#">Calle 13 entre carrera 12 y 13 del Casco Central. Calabozo estado Guarico. Venezuela</a></p>
				<p><a href="#">Preguntas frecuentes</a> <a href="#">¿Como comprar?</a> <a href="#">Sobre Nosotros</a></p>
				<p><a href="php/login.php">Administrar</a></p>
			</div>
			<div class="webMaster">
				<h3 class="tit">Web Master:Nad GarDez</h3>
				<p>Twiter:<a href="#">@gardeznad</a></p>
				<p>Instagram:<a href="#">@iranadgt</a></p>
				<p>Correo:<a href="#">gardezproducciones@gmail.com</a></p>
			</div>
		</div>
		
		<script src="javascript/scriptIndex.js">
		</script>
	</body>
<html>