<?php

	// CLASE DE CONEXIÓN INCLUIDA
	include_once('Conexion.php');

	class Usuario {

		// Atributos
		private $id;
		private $user_name;
		private $password;
		private $type;
		private $uuid;
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

		public function crear()
		{
			$sql = "SELECT * FROM usuarios";
			$resultado = $this->con->consultaRetorno($sql);
			$row = mysql_fetch_assoc($resultado);
			if (empty($row['user_name']))
			{
				$sql2 = "SELECT * FROM usuarios WHERE user_name = '{$this->user_name}'";
				$resultado = $this->con->consultaRetorno($sql2);
				$num = mysql_num_rows($resultado);
				$random=rand(1000, 9999);
				if ($num != 0) 
				{
					return false;
				} 
					else 
					{
						$sql = "INSERT INTO usuarios (user_name, password, type, uuid) VALUES (
						'{$this->user_name}', aes_encrypt('{$this->password}', '$random'), '{$this->type}', '$random')";

						$this->con->consultaSimple($sql);
						return true;
					}
				}
				else
				{

					$sql2 = "SELECT * FROM usuarios WHERE user_name = '{$this->user_name}'";
					$resultado = $this->con->consultaRetorno($sql2);
					$num = mysql_num_rows($resultado);
				if ($num != 0) 
				{
					return false;
				}
				else
				{
					$sql = "INSERT INTO usuarios (user_name, type) VALUES (
					'{$this->user_name}', 'FTP')";
					$resultado = $this->con->consultaRetorno($sql);
					return true;
				}
			}
			
		}
		
		public function eliminar() {
			$sql = "DELETE FROM usuarios WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);
		}

		public function ver() {
			$sql = "SELECT * FROM usuarios WHERE id = '{$this->id}' LIMIT 1";
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
			$sql="SELECT * FROM usuarios WHERE ID = '{$this->id}'";
			$resultado = $this->con->consultaRetorno($sql);
			$row = mysql_fetch_assoc($resultado);
			$this->uuid=$row['uuid'];
			$sql = "UPDATE usuarios SET user_name = '{$this->user_name}', password = aes_encrypt('{$this->password}', uuid), type = '{$this->type}' WHERE id = '{$this->id}'";

			$this->con->consultaSimple($sql);
		}

	}

?>