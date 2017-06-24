 <?php 
  
  session_start();

  if (isset($_SESSION["user_name"])) {
    $login = 1;
  } else {
    $login = 0;
  }
?>
<!DOCTYPE html>
<html>
<style>
h3 { text-align: center}
</style>

<h3>Usuarios</h3>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../CursosDeFormacionContinua/css/semantic/dist/semantic.min.css">
  	<script src="https://code.jquery.com/jquery-1.11.2.js"></script>
  	<script src="../CursosDeFormacionContinua/css/semantic/dist/semantic.min.js"></script>
</head>
<body>	
		<h3><a href="../CrearUsuarioSisWebFinal/?cargar=crear">Dar de Alta Usuarios</a></h3>
		<h3><a href="../CrearUsuarioSisWebFinal/?cargar=ver">Dar de Baja Usuarios</a></h3>
		<h3><a href="../CrearUsuarioSisWebFinal/?cargar=historial">Historial de Sesiones</a></h3>
		<h3>Mi cuenta</h3>
		<h3><a href="../CrearUsuarioSisWebFinal/?cargar=crear">Cambiar Contraseña</a></h3>
		

	</form>
</body>
</html>