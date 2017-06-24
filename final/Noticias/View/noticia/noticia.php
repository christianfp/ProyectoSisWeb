<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="semantic/dist/components/dropdown.min.css">
	<script src="https://code.jquery.com/jquery-1.11.2.js"></script>
	<script src="semantic/dist/semantic.min.js"></script>
	<link rel="stylesheet" href="Semantic/style.css">
</head>
<header>
<div class="ui container">
	</br>
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

		<div class="ui inverted menu" style="margin:auto; background-color: #0B0B3B;">
			<a class="active item">Noticias</a>
			<a class="item" href="../../../../final/sisWebUnirTodo/?cargar=informacion">Información General</a>
			<a class="item" href="../../../../final/sisWebUnirTodo/?cargar=plantel">Plantel Docente</a>
			<a class="item" href="../../../../final/sisWebUnirTodo/?cargar=cursos">Cursos de Formación Continua</a>
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
</header>
<body>
	<div>
		<a class="ui green button" href="?c=noticia&a=Nuevo">
		    <i class="plus icon"></i> Nueva Noticia</a>
	</div>
	<br>
	<div>
		<a class="ui blue button" href="?c=noticia&a=Noticia">
		    <i class="user icon"></i>User view</a>
	</div>

	<div class="ui segment">
	<table class="ui celled padded table">
			  <thead>
			    <th>Id</th>
			    <th>Titulo</th>
			    <th>Contenido</th>
			    <th>Autor</th>
			    <th></th>
			    <th></th>
			  </tr></thead>
			  <tbody>
			   <?php foreach($this->model->Listar() as $r): ?>
			    <tr>
			      <td>
			      <center>
			        <?php echo $r->id; ?>
			        </center>
			      </td>
			      <td class="single line">
			        <h4 class="ui center aligned header"><?php echo $r->title; ?></h4>
			      </td>
			      <td>
			        <?php echo $r->content; ?>
			      </td>
			      <td class="single line">
			        <h4 class="ui center aligned"><?php echo $r->autor; ?></h4>
			      </td>
			      <td>
			      		<h4 class="ui center aligned">
							<a class="ui blue button" href="?c=noticia&a=Crud&id=<?php echo $r->id; ?>">
							    <i class="write icon"></i> Editar</a>
						</h4>
	              </td>
	              <td>
                    <h4 class="ui center aligned">
							<a class="ui red button" href="?c=noticia&a=Eliminar&id=<?php echo $r->id; ?>">
							    <i class="remove icon"></i> Eliminar</a>
					</h4>
            	  </td>
			    </tr>
			    <?php endforeach; ?>
			  </tbody>
			</table>
	</table>
	</div>
</body>
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
</html>