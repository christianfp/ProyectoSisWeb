<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php  

		session_start();

		session_destroy();

		header("Location: login.php");

	?>
</body>
</html>