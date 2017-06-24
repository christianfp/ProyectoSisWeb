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
			<a class="item">Noticias</a>
			<a class="item">Información General</a>
			<a class="active item">Plantel Docente</a>
			<a class="item">Cursos de Formación Continua</a>
		</div>

		<!--Lista de Materias-->
		<div class="ui segment">
			<?php
				include("../controllers/listarMaterias.php");
			?>
    </div>
    <!--Fin Lista-->
  </div>
  </br>
  </br>

    <!--Footer-->
    <div class="ui center aligned inverted darkgreen vertical footer segment" style="background-color: #0B0B3B">
       <div class="ui horizontal inverted small divided link list">

        </div>
    </div>
    <!--Fin Footer-->
  </body>
</html>
