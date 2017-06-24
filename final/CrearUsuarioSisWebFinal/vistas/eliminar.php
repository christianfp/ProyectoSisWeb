<?php 
	$controlador = new ControladorUsuarios();
	if (isset($_GET['id'])) {
		$row = $controlador->ver($_GET['id']);
	} else {
		header("Location: index.php");
	}

	if (isset($_POST['enviar'])) {
		$controlador->eliminar($_GET['id']);
		header("Location: index.php");
	}
 ?>
<h1>Esta seguro que desea eliminar al usuario </h1><?php echo $row['user_name']; ?>?

 <br><br>
 <form action="" method="POST">
 	<input type="submit" name="enviar" value='Eliminar'>
 </form>