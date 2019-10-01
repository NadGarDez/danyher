<?php
	 
	$categorias=array();
	 
	$host="localhost";
	$user="root";
	$pass="Caraota.07";
	$db="db_danydaniher";

	$con=mysqli_connect($host,$user,$pass,$db);
	$consulta1="SELECT DISTINCT categoria FROM productos";
	
	$respuesta=mysqli_query($con,$consulta1);
	
	while(($fila=mysqli_fetch_array($respuesta, MYSQLI_ASSOC))==true){//extraer las categorias y almacenar en un ar
		                                                                                            //array
		$categorias[]=$fila['categoria'];
		
	};
	echo "<br>";
	
	for($i=0;$i<count($categorias);$i++){//extraer e imprimir cada producto de cada categoria
		$consulta2="SELECT * FROM productos WHERE categoria='$categorias[$i]'";
		$respuesta=mysqli_query($con,$consulta2);
		
		echo "<div class='categoria' id='".$categorias[$i]."'>";
		echo "<h3 class='tit'>".$categorias[$i]."</h3>";?>
		<p class='simbolo' style='cursor:hand' onclick="accionadorCategoria('<?php echo $i ?>','<?php echo $categorias[$i] ?>','contenedorProducto<?php echo $categorias[$i]?>')">+</p><?php
		
		echo "<div class='contenedor-productos' id='contenedorProducto".$categorias[$i]."'>";
		
		while(($fila=mysqli_fetch_array($respuesta, MYSQLI_ASSOC))==true){
			echo "<div class='producto'>
					<div class='foto'>
						<img src='".$fila['imagen1']."'>
					</div>
					<div class='descripcion'>
						<p><b>".$fila['nombre']."</b></p>
						<p>".$fila['fabricante']."</p>
						<p>".$fila['presio']."</p>
						<p>".$fila['existencia']."</p>
						<div class='mas-detalles' onclick='masdetalles('".$fila['id']."')'>
							<p>Mas detalles</p>
						</div>
					</div>
				</div>";
		};
		
		echo "</div>
			</div>";
		
	}



?>