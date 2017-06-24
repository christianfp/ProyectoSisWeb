 <?php 
  include_once("modulos/enrutador.php");
  include_once("modulos/controlador.php");

  session_start();

  if (isset($_SESSION["user_name"])) {
    $login = 1;
  } else {
    $login = 0;
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	
	
	<link rel="stylesheet" type="text/css" href="../CursosDeFormacionContinua/css/semantic/dist/semantic.min.css">
  	<script src="https://code.jquery.com/jquery-1.11.2.js"></script>
    <script src="../CursosDeFormacionContinua/css/semantic/dist/semantic.min.js"></script>
</head>
<body>
	<header id="cabeceraIndex">
    <div class="ui sticky container segment fluid" style="padding-left:0; padding-right:0; padding-bottom:0;">
  		<div class="ui two column grid">
        <div class="row">

        <div class="one wide column"></div>

        <div class="three wide column">
        	<div class="ui small image">
              <img src="../CursosDeFormacionContinua/imagenes/logoucb.gif">
            </div>
        </div>

        <div class="eleven wide column">
        	<div class="ui massive image">
              <img src="../CursosDeFormacionContinua/imagenes/Ingenieria-de-Sistemas.jpg">
            </div>
        </div>

        <div class="one wide column"></div>

        </div>
      </div>
    </div>
	 	<section>
	 		<?php 
	 			$enrutador = new Enrutador();
	 			if ($enrutador->validarGET($_GET['cargar'])) {
	 				$enrutador->cargarVista($_GET['cargar']);
	 			}
	 		 ?>
	 	</section>
  </header>
	
</body>
</html>

