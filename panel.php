<?php
	session_start();
	if($_SESSION['rol']=!'administrador'){
		echo "<script>alert('no esta autoriado')</script>";
		header("Location:login.php");
	}
?>

<!DOOCTIPE html>
<html lang ="en">
	<head>
		<meta charset="UTF-8">
		<link rel="STYLESHEET" type="text/css" href="../estilos/estilos-panel.css">
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
				<h2>Bienvenido <?php echo $_SESSION['usuario']; ?></h2>
			</div>
			<div class="opciones" style="cursor:hand">
				<h3>Control de Inventario</h3>
				<div class="opcion">
					<p>Agregar al Inventario</p>
				</div>
				<div class="opcion" style="cursor:hand">
					<p>Editar del Inventario</p>
				</div>
				<div class="opcion" style="cursor:hand">
					<p>Eliminar del inventario</p>
				</div>
				<div class="opcion" style="cursor:hand">
					<p>Mostrar el inventario</p>
				</div>
				
				<div class="visor">
					<div class="none" style="display:none">
						<p>Seleccione una opcion</p>
					</div>
					<div class="opcion-visor" id="ingresar" style="display:none">
						<form>
							<input type="text" placeholder="nombre producto"><br>
							<input type="text" placeholder="fabricante producto"><br>
							<input type="text" placeholder="nombre producto"><br>
							<input type="text" placeholder="presio producto"><br>
							<input type="text" placeholder="existencia"><br>
							<input type="file" placeholder="imagen1"><br>
							<input type="file" placeholder="imagen2 opcional"><br>
							<input type="file" placeholder="video opcional"><br>
							<input type="submit" value="agregar"><br>
						</form>
					</div>
					<div class="opcion-visor" id="editar" style="display:none">
						<form>
							<select>
								<option>articulo editar 1</option>
								<option>articulo editar 2</option>
								<option>articulo editar 3</option>
							</select><br>
							<input type="text" placeholder="nombre producto"></input><br>
							<input type="text" placeholder="fabricante producto"></input><br>
							<input type="text" placeholder="nombre producto"></input><br>
							<input type="text" placeholder="presio producto"></input><br>
							<input type="text" placeholder="existencia"></input><br>
							<input type="file" placeholder="imagen1"></input><br>
							<input type="file" placeholder="imagen2 opcional"></input><br>
							<input type="file" placeholder="video opcional"></input><br>
							<input type="submit" value="agregar">
						</form>
					</div>
					<div class="opcion-visor" id="eliminar" style="display:none">
						<div class="categoria" id="categoriaX">
							<h3 class="tit">Categoria x</h3>
							<div class="contenedor-productos" id="contenedorProductoX">
								<div class="producto" id="productosCategoriaX">
									<div class="foto">
									</div>
									<div class="descripcion">
										<input type="checkbox"></input>
									</div>
								</div>
								<div class="producto" id="productosCategoriaX">
									<div class="foto">
									</div>
									<div class="descripcion">
										<input type="checkbox"></input>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="opcion-visor" id="mostrar" style="display:block">
						
						
						
						<div class="categoria" id="categoriaX">
							<h3 class="tit">Categoria x</h3>
							<div class="contenedor-productos" id="contenedorProductoX">
								<div class="producto" id="productosCategoriaX">
									<div class="foto">
									</div>
									<div class="descripcion">
										<p><b>Nombre</b></p>
										<p>Marca</p>
										<p>Presio</p>
										<p>Exitencia</p>
										<div class="mas-detalles">
											<p>Mas detalles</p>
										</div>
									</div>
								</div>
								<div class="producto" id="productosCategoriaX">
									<div class="foto">
									</div>
									<div class="descripcion">
										<p><b>Nombre</b></p>
										<p>Marca</p>
										<p>Presio</p>
										<p>Exitencia</p>
										<div class="mas-detalles">
											<p>Mas detalles</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
						
						
						
						
						
					</div>
					
				</div>
				
				
			</div>
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