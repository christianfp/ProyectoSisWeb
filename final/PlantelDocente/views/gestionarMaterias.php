<!DOCTYPE HTML>

<html>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
	<script src="semantic/dist/semantic.min.js"></script>

	<head>
		<title>Gestionar Materias</title>
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
			<a class="item">Noticias</a>
			<a class="item">Información General</a>
			<a class="active item">Plantel Docente</a>
			<a class="item">Cursos de Formación Continua</a>
		</div>

		<!--Lista de Materias-->
		<div class="ui segment">
			<center><h2>Lista de Materias</h2></center>
			<a href="gestionarDocentes.php" class="ui right floated positive button"><i class="arrow right icon"></i> Ir a Docentes</a>
				<a href="registrarMateria.php" class="ui right floated positive button"><i class="plus icon"></i>Nueva Materia</a>
			</br><br>
				<table class="ui celled table">
				  <thead>
				    <tr>
				      <th>Sigla</th>
				      <th>Nombre</th>
				      <th></th>
				      <th></th>
				    </tr>
				  </thead>
				  <tbody>
					<?php
						include("../controllers/listarMaterias.php")
					 ?>
				 </tbody>
				</table>
	</div>
    <!--Fin Lista-->
  </div>
  </br>
  </br>

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
