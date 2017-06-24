<?php 

	class Enrutador {

		public function cargarVista($vista) {

			switch($vista):

				case "cursos":
					header("Location: ../CursosDeFormacionContinua/index.php");
					break;

				case "informacion":
					include_once('vistas/' . $vista . '.php');
					break;

				case "noticias":
					header("Location: ../Noticias/index.php");
					break;

				case "plantel":
					header('Location: ../PlantelDocente/views/gestionarDocentes.php');
					break;
				case "configuracion":
					include_once('vistas/' . $vista . '.php');
					break;

				default:
					include_once('vistas/error.php');

			endswitch;
		}

		public function validarGET($variable) {
			if (empty($variable)) {
				header("Location: ../Noticias/index.php");
			} else {
				return true;
			}
		}

	}

 ?>