<?php

	// CLASE DE CONEXIÓN INCLUIDA
	include_once('Conexion.php');

	class Usuario {

		// Atributos
		private $id;
		private $user_name;
		private $password;
		private $type;
		
		private $con;

		// Metodos
		public function __construct() {
			$this->con = new Conexion();
		}

		public function set($atributo, $contenido) {
			$this->$atributo = $contenido;
		}

		public function get($atributo) {
			return $this->$atributo;
		}

		public function listar() {
			$sql = "SELECT * FROM usuarios";
			$resultado = $this->con->consultaRetorno($sql);
			return $resultado;
		}

		public function crear() {

			$sql2 = "SELECT * FROM usuarios WHERE user_name = '{$this->user_name}'";
			$resultado = $this->con->consultaRetorno($sql2);
			$num = mysql_num_rows($resultado);

			if ($num != 0) {
				return false;
			} else {
				$sql = "INSERT INTO usuarios (user_name, password, type) VALUES (
					'{$this->user_name}', '{$this->password}', '{$this->type}')";

				$this->con->consultaSimple($sql);
				return true;
			}
		}

		public function eliminar() {
			$sql = "DELETE FROM usuarios WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);
		}

		public function ver() {
			$sql = "SELECT * FROM usuarios WHERE user_name = '{$this->user_name}' LIMIT 1";
			$resultado = $this->con->consultaRetorno($sql);
			$row = mysql_fetch_assoc($resultado);

			// Set
			$this->id = $row['id'];
			$this->user_name = $row['user_name'];
			$this->password = $row['password'];
			$this->type = $row['type'];

			return $row;
		}

		public function editar() {
			$sql = "UPDATE usuarios SET user_name = '{$this->user_name}', password = '{$this->password}', type = '{$this->type}' WHERE id = '{$this->id}'";

			$this->con->consultaSimple($sql);
		}

	}

?>