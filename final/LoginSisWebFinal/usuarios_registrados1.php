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

		echo "Hola: ". $_SESSION["user_name"] . "<br><br>";

 	?>

	<p>Esto es informacion solo para usuarios registrados</p>
	<table width="499" height="175" border="1">
	  <tr>
	    <td colspan="3" align="center">Zona usuarios Registrados</td>
      </tr>
	  <tr>
	    <td><a href="usuarios_registrados2.php">Página 1</a></td>
	    <td><a href="usuarios_registrados3.php">Página 2</a></td>
	    <td><a href="usuarios_registrados4.php">Página 3</a></td>
      </tr>
</table>
	<p>&nbsp;</p>
</body>
</html>