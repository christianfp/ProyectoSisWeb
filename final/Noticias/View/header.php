<!DOCTYPE html>
<html lang="es">
	<head>
   		 <title>Noticias</title>

	     <meta charset="utf-8">
		 <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
		 <script src="semantic/dist/semantic.min.js"></script>
	     <script src="semantic/dist/components/dropdown.min.js"></script>
	     <script src="semantic/examples/assets/library/jquery.min.js"></script>
		 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		 <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.min.js"></script>
	 	 <link rel="stylesheet" href="Semantic/style.css">
	            
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
			              <img src="images/logoucb.gif">
		            	</div>
		          	</div>

		          	<div class="eleven wide column">
		            	<div class="ui massive image">
		              		<img src="images/Ingenieria-de-Sistemas.jpg">
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
		      		echo '<a class="item" href="../LoginSisWebFinal/cierre.php">Cierra Sesión</a>';
	    		} else {
		      		echo '<a class="item" href="../LoginSisWebFinal/login.php">Inicia Sesión</a>';
		    	}

		  	?>
	  	</div>
    </body>
</html>
