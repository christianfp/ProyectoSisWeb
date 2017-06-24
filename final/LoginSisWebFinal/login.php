<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../CursosDeFormacionContinua/css/semantic/dist/semantic.min.css">
  	<script src="https://code.jquery.com/jquery-1.11.2.js"></script>
  	<script src="../CursosDeFormacionContinua/css/semantic/dist/semantic.min.js"></script>
</head>
<body>
	<header id="cabeceraIndex">
    <div class="ui sticky container segment fluid" style="padding-left:0; padding-right:0; padding-bottom:0;">
  		<div class="ui two column grid">
        <div class="row">

        <div class="one wide column"></div>

        <div class="three wide column">
        	<div class="ui small image">
              <img src="../CursosDeFormacionContinua/imagenes/logoucb.gif">
            </div>
        </div>

        <div class="eleven wide column">
        	<div class="ui massive image">
              <img src="../CursosDeFormacionContinua/imagenes/Ingenieria-de-Sistemas.jpg">
            </div>
        </div>

        <div class="one wide column"></div>

        </div>
      </div>
    </div>
  </header>
	<form id="loginForm" action="verificar.php" method="POST">
		<label>Usuario:</label>
		<input class="inputDatos" type="text" name="user_name" required="required">
		<br/>
		<label>Contraseña:</label>
		<input class="inputDatos" type="password" name="password" required="required">
		<br/><br/>
		<input type="submit" value="Login">
		<h5><a href="../sisWebUnirTodo/index.php">IR A PAGINA PRINCIPAL SIN INICIAR SECION</a></h5><br><br>
		<h3><a href="../CrearUsuarioSisWebFinal/?cargar=crear">Crear Usuario</a></h3>
	</form>
</body>
</html>