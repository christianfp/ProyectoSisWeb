<?php 
	$controlador = new ControladorUsuarios();
	if (isset($_GET['id'])) {
		$row = $controlador->ver($_GET['id']);
	} else {
		header("Location: index.php");
	}
 ?>

<b>Nombre de Usuario:</b> <?php echo $row['user_name'] ?>
<br><br>

<b>Tipo:</b> <?php echo $row['type'] ?>
<br><br>