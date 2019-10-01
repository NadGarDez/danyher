<?php
	session_start();
	if(!isset($_SESSION['usuario'])){
		$_SESSION['usuario'];
	}
	
	if(!isset($_SESSION['rol'])){
		$_SESSION['rol'];
	}
	
	$usuario=$_POST['usuario'];
	$pass=$_POST['pass'];
	
	$host="localhost";
	$user="root";
	$pass="Caraota.07";
	$db="db_danydaniher";

	$con=mysqli_connect($host,$user,$pass,$db);
	$consulta="SELECT * FROM usuarios WHERE nombre_usuario='$usuario' AND llave='$pass'";
	
	$respuesta=mysqli_query($con,$consulta);
	
	$fila=mysqli_fetch_array($respuesta, MYSQLI_ASSOC);
	
	
	if($fila==true){
		$_SESSION['usuario']=$fila['nombre_usuario'];
		$_SESSION['rol']=$fila['rol'];
		header("Location:panel.php?usuario=".$fila['nombre_usuario']);
	}
	
	else{
		echo "<script>alert('usuario no identificado');</script>";
		header("Location:login.php");
	}
	mysqli_close($con);
	
?>