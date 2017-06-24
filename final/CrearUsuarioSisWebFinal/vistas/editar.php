<?php 
	$controlador = new ControladorUsuarios();
	if (isset($_GET['id'])) {
		$row = $controlador->ver($_GET['id']);
	} else {
		header("Location: index.php");
	}

	if (isset($_POST['enviar'])) {

		if ($_POST['type'] == 'LOCAL') {
			if ($_POST['password']) {
				$controlador->editar($_GET['id'], $_POST['user_name'], $row['password'], $_POST['type']);
				header('Location: index.php');
			} else {
				echo "ERROR, Un usuario local debe crear una contraseña obligatoriamente";
			}
		} else {
			if (!$_POST['password']) {
				$controlador->editar($_GET['id'], $_POST['user_name'], '', $_POST['type']);
				header('Location: index.php');
			} else {
				echo "ERROR, Un usuario ftp no debe crear una contraseña";
			}
		}
	}

 ?>

 <form action="" method="POST">
 	Nombre de Usuario: <br>
 	<input type="text" name="user_name" value="<?php echo $row['user_name']; ?>" required="required">
 	<br><br>
 	Contraseña: <br>
 	<input type="text" name="password">
 	<br><br>
 	Tipo: <br>
 	<select name="type" required="required">
 		<?php 
 			if ($row['type'] == 'LOCAL') {
 				echo '	<option value="LOCAL" selected="true">LOCAL</option>
						<option value="FTP">FTP</option>';
 			} else {
 				echo '	<option value="LOCAL">LOCAL</option>
						<option value="FTP" selected="true">FTP</option>';
 			}
	 	?>
	</select>
 	<br><br>
 	<input type="submit" name="enviar" value="Editar">
 </form>