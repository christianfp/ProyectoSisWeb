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
			<a class="item" href="/proyectosisweb">Noticias</a>
			<a class="item">Información General</a>
			<a class="item">Plantel Docente</a>
			<a class="item">Cursos de Formación Continua</a>
		</div>
</header>
<body>
<center>
<h1 class="page-header">
    Actualizacion de Registro
</h1>
</center>
<div class="ui segment">
<form id="frm-noticia" class="ui form" action="?c=noticia&a=Editar" method="post" enctype="multipart/form-data">
<h4 class="ui dividing header">Datos Noticia</h4>
  <div class="field">
    <label>Id</label>
      <div class="field">
        <input type="text" name="id" pattern="[0-9].{0,}" value="<?php echo $pvd->id; ?>" class="form-control" placeholder="Ingrese Id" required="required" oninvalid="setCustomValidity('Please enter a valid id')"
    onchange="try{setCustomValidity('')}catch(e){}" />
  	  </div>
   </div>
  <div class="field">
    <label>Title</label>
      <div class="field">
        <input type="text" name="title" pattern="[A-Za-z0-9].{5,20}" value="<?php echo $pvd->title; ?>" class="form-control" placeholder="Ingrese Titulo" required="required" oninvalid="setCustomValidity('Please enter a valid title with just letters')"
    onchange="try{setCustomValidity('')}catch(e){}"/>
  	  </div>
   </div>
  <div class="field">
    <label>Contenido</label>
    <div class="field">
        <textarea rows="10" cols="200" name="content" pattern="[a-zA-Z0-9].{10,10000}" value="<?php echo $pvd->content; ?>" class="form-control" placeholder="Ingrese Contenido" required="required" oninvalid="setCustomValidity('Please enter the content just with letters and numbers')"
    onchange="try{setCustomValidity('')}catch(e){}" /></textarea>
    </div>
  </div>
  <div class="field">
      <label>Image</label>
      <div class="field">
           <input type="file" value="<?php echo $pvd->image; ?>" name="image"/>
      </div>
  </div>
  <h4 class="ui dividing header">Datos Autor</h4>
  <div class="field">
      <label>Nombre</label>
      <input type="text" name="autor" pattern="[A-Za-z].{5,20}" value="<?php echo $pvd->autor; ?>" class="form-control" placeholder="Ingrese Autor" required="required" oninvalid="setCustomValidity('Please enter a valid Autor Name')"
    onchange="try{setCustomValidity('')}catch(e){}"/>
  </div>
  <center>
  <br><br>
  <div class="text-right">
        <button class="ui blue button">Actualizar</button>
  </div>
  <center>
</form>
</div>
<br>
<br>
<br>
</body>
<script>
    $(document).ready(function(){
        $("#frm-noticia").submit(function(){
			alert("The News was updated properly");
            return $(this).validate();
        });
    })
</script>
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