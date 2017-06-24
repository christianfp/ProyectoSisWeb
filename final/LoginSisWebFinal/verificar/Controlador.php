<?php 

	include_once("Usuario.php");

	class ControladorUsuarios {

		// Atributos
		private $usuario;

		// Metodos
		public function __construct() {
			$this->usuario = new Usuario();
		}

		public function index() {
			$resultado = $this->usuario->listar();
			return $resultado;
		}

		public function crear($id, $user_name, $password, $type) {
			$this->usuario->set("id", $id);
			$this->usuario->set("user_name", $user_name);
			$this->usuario->set("password", $password);
			$this->usuario->set("type", $type);

			$resultado = $this->usuario->crear();
			return $resultado;
		}

		public function eliminar($id) {
			$this->usuario->set("id", $id);
			$this->usuario->eliminar();
		}

		public function ver($user_name) {
			$this->usuario->set("user_name", $user_name);
			$datos = $this->usuario->ver();
			return $datos;
		}

		public function editar($id, $user_name, $password, $type) {
			$this->usuario->set('id', $id);
			$this->usuario->set('user_name', $user_name);
			$this->usuario->set('password', $password);
			$this->usuario->set('type', $type);
			$this->usuario->editar();
		}

	}

?>