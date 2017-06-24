<?php 
	include_once("modulos/Enrutador.php");
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vista Principal</title>
	<link href="css/estilos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/semantic/dist/semantic.min.css">
  	<script src="https://code.jquery.com/jquery-1.11.2.js"></script>
  	<script src="css/semantic/dist/semantic.min.js"></script>
</head>
<body>
	<header id="cabeceraIndex">
	    <div class="ui sticky container segment fluid" style="padding-left:0; padding-right:0; padding-bottom:0;">
	      <div class="ui two column grid">
	        <div class="row">

		        <div class="one wide column">
		        </div>

		         <div class="three wide column">
		           <div class="ui small image">
		              <img src="imagenes/logoucb.gif">
		            </div>
		          </div>

		          <div class="eleven wide column">
		            <div class="ui massive image">
		              <img src="imagenes/Ingenieria-de-Sistemas.jpg">
		            </div>
		          </div>

		          <div class="one wide column">
		          </div>

	        </div>
	      </div>
	   	</div>
  	</header>

	<div class="ui inverted menu" style="margin:auto; background-color: #0B0B3B;">
	    <a class="item" href="../sisWebUnirTodo/?cargar=noticias">Noticias</a>
	    <a class="item" href="../sisWebUnirTodo/?cargar=informacion">Información General</a>
	    <a class="item" href="../sisWebUnirTodo/?cargar=plantel">Plantel Docente</a>
	    <a class="item" href="../sisWebUnirTodo/?cargar=cursos">Cursos de Formación Continua</a>
	    
	    <?php 

	    	session_start();

	    	if (isset($_SESSION["user_name"])) {
	    		echo '<a class="item" href="../sisWebUnirTodo/?cargar=configuracion">Configuracion</a>';
	      		echo '<a class="item" href="../LoginSisWebFinal/cierre.php">Cierra Sesión</a>';	
    		} else {
	      		echo '<a class="item" href="../LoginSisWebFinal/login.php">Inicia Sesión</a>';
	    	}

	  	?>
	</div>
	<br><br>
	<section>
 		<?php 
 			$enrutador = new Enrutador();
 			if ($enrutador->validarGET($_GET['cargar'])) {
 				$enrutador->cargarVista($_GET['cargar']);
 			}
 		 ?>
 	</section>

</body>
</html>