<!DOCTYPE html>
<html>
<head>
	<title>Asignar a Docente Materia</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
  	<script src="https://code.jquery.com/jquery-1.11.2.js"></script>
	<script src="semantic/dist/semantic.min.js"></script>
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
	<div class="ui segment">
	<center><h2>Asignar Materia a Docente</h2></center>
	<br><br>
	<form method="POST" action="../controllers/crearAsignacion.php">
		<table class="ui basic table">
			<tr>
				<td style="width:40%">
					<strong> Docente:</strong><?php  include("../controllers/poblandoSelectDocente.php"); ?>
				</td>
				<td style="width:40%">
					<strong> Materia:</strong><?php include("../controllers/poblandoSelectMaterias.php"); ?>
				</td>
				<td style="width:10%">
					<button type="submit" class="positive ui button" name="editar_docente">Asignar</button>
				</td>
				<td style="width:10%"><a href="gestionarMaterias.php" class="negative ui button">Cancelar</a></td>
			</tr>

		</table>

	</form>
</div>
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
