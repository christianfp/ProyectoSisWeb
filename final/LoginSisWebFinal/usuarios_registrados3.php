<!DOCTYPE html>
<html>
<head>
	<title>usuarios_registrados1</title>
	<meta charset="utf-8">
</head>
<body>

	<?php 

		session_start();

		if (!isset($_SESSION["user_name"])) {
			header("Location: login.php");
		}

	?>

	<p><a href="cierre.php">Cierra Sesión</a></p>

	<h1>Bienvenido Usuarios</h1>

	<?php 

		echo "Usuario: ". $_SESSION["user_name"] . "<br><br>";

	 ?>

	<p>Esto es informacion solo para usuarios registrados</p>
	<a href="usuarios_registrados1.php">Volver</a>
	
</body>
</html>