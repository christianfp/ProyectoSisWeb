<?php 
	$controlador = new ControladorUsuarios();
	if (isset($_POST['enviar'])) {

		if ($_POST['password']) {
			$type = 'LOCAL';
		} else {
			$type = 'FTP';
		}

			$r = $controlador->crear(0, $_POST['user_name'], $_POST['password'], $type);

		if ($r) {
			echo "Se ha registrado un nuevo usuario";
			header('Location: ../sisWebUnirTodo/index.php');
		} else {
			echo "El nombre de usuario que esta intentando ingresar ya existe";
		}
	}
?>
<html>
<style>
h3 { text-align: center}
form { 
margin: 0 auto; 
width:250px;
}
</style>
<h3>Registro de un nuevo usuario</h3>

<hr>
<form action="" method="POST">
	<h1>Nombre de Usuario</h1>
	<input type="text" name="user_name" required="required">
	<input type="submit" name="enviar" size="20" value="Crear"  >
	
</form>	
</html>