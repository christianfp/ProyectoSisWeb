<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'sisWebdb'); 
define('DB_USER','root'); 
define('DB_PASSWORD','mysql');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
session_start();
	$user_name=$_POST['user_name'];
	$password=$_POST['password'];
	$query=mysql_query("SELECT * FROM usuarios WHERE user_name='$user_name' AND password = aes_encrypt('$password', uuid)") or die (mysql_error());
	$row=mysql_fetch_array($query);
	if (!empty($row['user_name']))
	{
		$query=mysql_query("INSERT INTO historicos(mensaje) VALUES('Sesion iniciada por el usuario: $user_name')");
		$_SESSION['user_name']=$row['user_name'];
		header("Location: ../sisWebUnirTodo/index.php");
	}
	else
	{
		$ftp_server="mail.ucbcba.edu.bo";
		$conn_id = ftp_connect($ftp_server) or die("No se pudo conectar a $ftp_server");
		$query=mysql_query("SELECT * FROM usuarios WHERE user_name='$user_name'");
		$row=mysql_fetch_array($query);
		if (!empty($row['user_name']))
		{
			if (@ftp_login($conn_id, $_POST["user_name"], $_POST["password"])) {
					session_start();
					$query=mysql_query("INSERT INTO historicos(mensaje) VALUES('Sesion iniciada por el usuario: $user_name')");
					$_SESSION["user_name"] = $_POST["user_name"];
					header("Location: ../sisWebUnirTodo/index.php");
				} 
				else {
					$query=mysql_query("INSERT INTO historicos(mensaje) VALUES('Credenciales incorrectos, usuario: $user_name')");
					header("Location: login.php");
				}
		}
		else {
					$query=mysql_query("INSERT INTO historicos(mensaje) VALUES('Credenciales incorrectos, usuario: $user_name')");
					header("Location: login.php");
				}

		
	}

