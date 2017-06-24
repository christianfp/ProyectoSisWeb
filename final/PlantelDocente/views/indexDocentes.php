<!DOCTYPE HTML>

<html>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
	<script src="semantic/dist/semantic.min.js"></script>

	<head>
		<title>Plantel Docente</title>
	</head>

	<body>

	<div class="ui container">
	</br>
		<div class="ui sticky container segment fluid" style="padding-left:0; padding-right:0; padding-bottom:0;">
			<div class="ui two column grid">
				<div class="row">

				<div class="one wide column">
				</div>

				 <div class="three wide column">
					 <div class="ui small image">
	  					<img src="imgs/logoucb.gif">
						</div>
					</div>

					<div class="eleven wide column">
						<div class="ui massive image">
							<img src="imgs/Ingenieria-de-Sistemas.jpg">
						</div>
					</div>

					<div class="one wide column">
					</div>

				</div>
			</div>
		</div>

		<div class="ui inverted menu" style="margin:auto; background-color: #0B0B3B;">
			<a class="item" href="/final/sisWebUnirTodo/?cargar=noticias">Noticias</a>
			<a class="item" href="/final/sisWebUnirTodo/?cargar=informacion">Informaci&oacute;n General</a>
			<a class="active item">Plantel Docente</a>
			<a class="item" href="/final/sisWebUnirTodo/?cargar=cursos">Cursos de Formaci&oacute;n Continua</a>
			 <?php 

	    	session_start();

	    	if (isset($_SESSION["user_name"])) {
	    		echo '<a class="item" href="/final/sisWebUnirTodo/?cargar=configuracion">Configuracion</a>';
	      		echo '<a class="item" href="/final/LoginSisWebFinal/cierre.php">Cierra Sesión</a>';	
    		} else {
	      		echo '<a class="item" href="/final/LoginSisWebFinal/login.php">Inicia Sesión</a>';
	    	}

	  	?>
		</div>

<?php
				include("../controllers/selectDocentes.php");
?>



	</div>

</br>
	<!--Footer-->
	<div class="ui sticky segment fluid inverted darkgreen vertical footer" style="background-color: #0B0B3B" >
		 <div class="ui aligned container">
			 <div class="ui stackable inverted divided grid">

				 <div class="eight wide column">
				 </div>

				 <div class="eight wide column">
					 <div class="ui segment basic">


						 <h4 class="ui inverted header">Síguenos en:</h4>
						 <div class="ui center aligned segment basic">
							 <a class="ui circular facebook icon button"><i class="facebook icon"></i></a>
							 <a class="ui circular twitter icon button"><i class="twitter icon"></i></a>
							 <button class="ui circular google plus icon button"><i class="google plus icon"></i></button>
							 <button class="ui circular instagram icon button"><i class="instagram icon"></i></button>
							 <button class="ui circular youtube icon button"><i class="youtube icon"></i></button></br>
						 </div>
					 </div>
				 </div>
			 </div>
		 </br></br></br>
			 <div class="ui inverted section divider"></div>
		 </br></br></br></br>
		 </div>
	</div>
 <!--Fin de Footer-->

  </body>
</html>
