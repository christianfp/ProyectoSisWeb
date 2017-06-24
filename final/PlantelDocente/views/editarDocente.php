
<?php
  include("../bd/connection.php");
  $ci = $_GET['ci'];
  $ci_capturado=$ci;
  $sentence = "SELECT * FROM docente WHERE ci = $ci";
  $result = $conn->query($sentence);
  $row = $result->fetch_assoc();
  $conn->close();
?>

<!DOCTYPE HTML>
<html>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
  <script src="https://code.jquery.com/jquery-1.11.2.js"></script>
	<script src="semantic/dist/semantic.min.js"></script>

	<head>
		<title>Editar Docente</title>
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

			<!--Docente-->
      <div class="ui segment">
        <center><h2>Editar Docente</h2></center>
        <br>
        <form class="ui form" method="post" enctype="multipart/form-data" action="../controllers/updateDocente.php">
          <h3 class="ui dividing header">Información Básica</h3>
          <div class="field">
  					<div class="four wide field">
              <label>Foto</label>
              <div class="ui action input">
  							<input type="text" placeholder="Elija un archivo" readonly>
  							<input name="imagen" size="30" type="file" style="display:none"/>
  							<div class="ui icon button">
  								<i class="image icon"></i>
  							</div>
  						</div>
  					</div>
  				</div>
          <div class="field">
            <div class="four wide field">
              <label>CI</label>
              <input type="number" name="ci" value="<?php echo $row["ci"];?>" >
            </div>
          </div>
          <div class="field">
            <div class="two fields">
              <div class="field">
                <label>Nombre</label>
                <input type="text" name="nombre" value="<?php echo $row["nombre"];?>">
              </div>
              <div class="field">
                <label>Apellidos</label>
                <input type="text" name="apellido" value="<?php echo $row["apellido"];?>">
              </div>
            </div>
          </div>
          <div class="field">
            <div class="two fields">
              <div class="field">
                <label>Dirección</label>
                <input type="text" name="direccion" value="<?php echo $row["direccion"];?>">
              </div>
              <div class="field">
                <label>Teléfono</label>
                <input type="text" name="telefono" value="<?php echo $row["telefono"];?>">
              </div>
            </div>
          </div>
          <div class="field">
            <div class="two fields">
              <div class="field">
                <label>Grado Académico</label>
                <select class="ui fluid dropdown" name="grado_academico" >
                  <option value="">Seleccione su grado Académico</option>
                  <option
                  <?php
                    if(($row["grado_academico"])=="Licenciado"){
                    echo "selected";}
                  ?>
                  value="Licenciado">Licenciado</option>
                  <option
                  <?php
                    if(($row["grado_academico"])=="Masterado"){
                    echo "selected";}
                  ?>
                  value="Masterado">Masterado</option>
                  <option
                  <?php
                    if(($row["grado_academico"])=="Doctorado"){
                    echo "selected";}
                  ?>
                  value="Doctorado">Doctorado</option>
                </select>
              </div>
              <div class="field">
                <label>Estado Laboral</label>
                <select class="ui fluid dropdown" name="estado_laboral">
                  <option value="">Seleccione su Estado Laboral</option>
                  <option
                  <?php
                  if(($row["estado_laboral"])=="Activo"){
                    echo "selected";}
                  ?>
                  value="Activo">Vigente</option>
                  <option
                   <?php
                  if(($row["estado_laboral"])=="Inactivo"){
                    echo "selected";}
                  ?>
                  value="Inactivo">No Vigente</option>
                </select>
              </div>
            </div>
          </div>
          <h3 class="ui dividing header">Formación Académica</h3>
          <div class="field">
            <textarea rows="2" name="formacion_academica" value=""><?php echo $row["formacion_academica"];?></textarea>
          </div>
          <h3 class="ui dividing header">Formación Profesional</h3>
          <div class="field">
            <textarea rows="2" name="formacion_profesional" value="" ><?php echo $row["formacion_profesional"];?></textarea>
          </div>
          <h3 class="ui dividing header">Historial de Trabajo</h3>
          <div class="field">
            <textarea rows="2" name="historial_trabajo" value=""><?php echo $row["historial_trabajo"];?></textarea>
          </div><br>
          <center>
            <button type="submit" class="positive ui button" name="editar_docente">Actualizar</button>
            <a href='gestionarDocentes.php' class='ui negative button'>Cancelar</a>
          </center>
        </form>
    </div>
  </div>
  <script>
    $(document).ready(function (){
      $('.ui.dropdown').dropdown();

      $('.ui.icon.button').click(function() {
				$('input:file').click();
			});

			$('input:text').click(function() {
				$(this).parent().find('input:file').click();
			})

			$('input:file', '.ui.action.input').on('change', function(e){
				var fileName = e.target.files[0].name;
				$('input:text', $(e.target).parent()).val(fileName);
			});
    });
  </script>
</br>
</div>
</div>
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
