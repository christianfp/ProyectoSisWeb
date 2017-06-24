<!DOCTYPE HTML>

<html>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
	<script src="https://code.jquery.com/jquery-1.11.2.js"></script>
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

		<div class="ui segment">
			<center><h2>Registrar Docente</h2></center>
			<br>
			<div class="ui error message">
  		<div class="header">
    	No se ha podido realizar el registro debido a uno de los siguientes motivos:
  		</div>
			<ul class="list">
				<li>El formato de imagen debe ser .jpg, jpeg, .gif o .png.</li>
     		<li>Todos los campos son obligatorios.</li>
     		<li>Nombre y Apellido no deben pasar los 100 caracteres</li>
				<li>Nombre y Apellido deben ser letras de A-Z y a-z</li>
   		</ul>
			</div>
			<form class="ui form" method="post" enctype="multipart/form-data" action="../controllers/crearDocente.php">
				<h3 class="ui dividing header">Información Básica</h3>
				<div class="field">
					<label>Foto</label>
					<input name="imagen" size="30" type="file" />
				</div>
				<div class="field">
					<div class="four wide field">
						<label>CI</label>
						<div class="ui corner labeled input">
							<input type="number" name="ci" placeholder="Carnet de Identidad">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="two fields">
						<div class="field">
							<label>Nombre</label>
							<div class="ui corner labeled input">
								<input type="text" name="nombre" placeholder="Nombre">
							</div>
						</div>
						<div class="field">
							<label>Apellido</label>
							<div class="ui corner labeled input">
								<input type="text" name="apellido" placeholder="Apellido">
							</div>
						</div>
					</div>
				</div>
				<div class="field">
					<div class="two fields">
						<div class="field">
							<label>Dirección</label>
							<div class="ui corner labeled input">
								<input type="text" name="direccion" placeholder="Dirección">
							</div>
						</div>
						<div class="field">
							<label>Teléfono</label>
							<div class="ui corner labeled input">
								<input type="number" name="telefono" placeholder="Teléfono / Celular">
							</div>
						</div>
					</div>
				</div>
				<div class="field">
					<div class="two fields">
						<div class="field">
							<label>Grado Académico</label>
							<select class="ui fluid dropdown" name="grado_academico">
								<option value="">Seleccione su grado Académico</option>
							  <option value="Licenciado">Licenciado</option>
							  <option value="Masterado">Masterado</option>
							  <option value="Doctorado">Doctorado</option>
							</select>
						</div>
						<div class="field">
							<label>Estado Laboral</label>
							<select class="ui fluid dropdown" name="estado_laboral">
								<option value="">Seleccione su Estado Laboral</option>
							  <option value="Activo">Vigente</option>
							  <option value="Inactivo">No Vigente</option>
							</select>
						</div>
					</div>
				</div>
				<h3 class="ui dividing header">Formación Académica</h3>
				<div class="field">
    			<textarea rows="2" name="formacion_academica" placeholder="Describa las instituciones donde estudió"></textarea>
  			</div>
				<h3 class="ui dividing header">Formación Profesional</h3>
				<div class="field">
    			<textarea rows="2" name="formacion_profesional" placeholder="Describa los cursos de post-grado que realizó"></textarea>
  			</div>
				<h3 class="ui dividing header">Historial de Trabajo</h3>
				<div class="field">
    			<textarea rows="2" name="historial_trabajo" placeholder="Describa los lugares donde trabajó / trabaja"></textarea>
  			</div><br>
				<center>
					<button type="submit" class="positive ui button" name="registrar_docente" id="registrar_docente">Registrar</button>
					<a  href="gestionarDocentes.php" class="negative ui button" name="cancelar">Cancelar</a>
				</center>
			</form>
		</div>
	</div>
	<script>
		$(document).ready(function (){
			$('.ui.dropdown').dropdown();
		});
	</script>
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
