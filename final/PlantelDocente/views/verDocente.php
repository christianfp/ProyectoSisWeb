<?php
  include("../bd/connection.php");
  $ci = $_GET['ci'];
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
		<title>Ver Docente</title>
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
      <a href="gestionarDocentes.php" class="active item">Plantel Docente</a>
      <a class="item">Cursos de Formación Continua</a>
    </div>
			<!--Docente-->
      <div class="ui segment">
        <h3 class="ui horizontal divider header">
          <i class="user icon"></i>
            Información Básica
        </h3>
        <img class="ui centered small image" src="../controllers/fotos/<?php echo $row['nombre_foto'] ?>">
        <table class="ui definition table">
          <tbody>
            <tr>
              <td class="four wide column">CI</td>
              <td><?php echo $row['ci'] ?></td>
            </tr>
            <tr>
              <td>Nombre</td>
              <td><?php echo $row['nombre'] ?></td>
            </tr>
            <tr>
              <td>Apellido</td>
              <td><?php echo $row['apellido'] ?></td>
            </tr>
            <tr>
              <td>Dirección</td>
              <td><?php echo $row['direccion'] ?></td>
            </tr>
            <tr>
              <td>Teléfono</td>
              <td><?php echo $row['telefono'] ?></td>
            </tr>
            <tr>
              <td>Grado Académico</td>
              <td><?php echo $row['grado_academico'] ?></td>
            </tr>
            <tr>
              <td>Estado Laboral</td>
              <td><?php echo $row['estado_laboral'] ?></td>
            </tr>
          </tbody>
        </table>
        <h3 class="ui horizontal divider header">
          <i class="book icon"></i>
            Formación Académica
        </h3>
        <p><?php echo $row['formacion_academica'] ?></p>
        <br>
        <h3 class="ui horizontal divider header">
          <i class="student icon"></i>
            Formación Profesional
        </h3>
        <p><?php echo $row['formacion_profesional'] ?></p>
        <br>
        <h3 class="ui horizontal divider header">
          <i class="suitcase icon"></i>
            Historial de Trabajo
        </h3>
        <p><?php echo $row['historial_trabajo'] ?></p>
        <br>
      </div>
    </div>
  </body>
</html>
