<?php
	// registro_pr.php
	
	// 0. Recibir los datos del formulario

	$usuario = $_POST ['usuario'];
	// Encriptamos la clave
	$clave = md5 ($_POST ['clave']);
	$nombre = $_POST ['nombre'];
	$email = $_POST ['email'];

	// 1. Conectarse a la BD
	include("conexion.php");

	// 2. Crear la query
	$registrar = "
	INSERT INTO usuarios
	VALUES (
		NULL
		, '$usuario'
		, '$clave'
		, '$nombre'
		, '$email'
	)";

	

	// 3. Ejecutar la query
	$registrar_ej = mysqli_query($conexion, $registrar);

	// 4. Preguntar si funcionó
	if ($registrar_ej === true) {
		// echo "Todo ok"; }
		// Con esto redireccionamos
		header("location: index.php");}
		else {
			echo"Error de SQL. $registrar";
		}
	
	
?>