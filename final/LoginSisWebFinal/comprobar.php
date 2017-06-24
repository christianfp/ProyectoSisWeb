<?php 

	try {
		
		$base = new PDO("mysql:host=localhost;dbname=sisWebdb", "root", "mysql");

		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "SELECT * FROM usuarios WHERE user_name = :user_name";

		$resultado = $base->prepare($sql);

		$user_name = htmlentities(addslashes($_POST["user_name"]));

		$password = htmlentities(addslashes($_POST["password"]));

		$resultado->bindValue(":user_name", $user_name);

		$resultado->execute();

		$numero_registros = $resultado->rowCount();

		if ($numero_registros != 0) {

			include_once("verificar/Controlador.php");

			$controlador = new ControladorUsuarios();

			$row = $controlador->ver($user_name);

			if (password_verify($_POST["password"], $row["password"])) {
				session_start();
				$_SESSION["user_name"] = $_POST["user_name"];
				header("Location: ../sisWebUnirTodo/index.php");
			} else {
				$ftp_server = "mail.ucbcba.edu.bo";
				$conn_id = ftp_connect($ftp_server) or die("No se pudo conectar a $ftp_server");

				if (@ftp_login($conn_id, $_POST["user_name"], $_POST["password"])) {
					session_start();
					$_SESSION["user_name"] = $_POST["user_name"];
					header("Location: ../sisWebUnirTodo/index.php");
				} else {
					header("Location: login.php");
				}
			}
		} else {
			header("Location: login.php");
		}

	} catch (Exception $e) {
		die("Error: ".$e->getMessage());
	}

?>