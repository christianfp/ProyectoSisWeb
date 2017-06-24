<?php
class noticia
{
	private $pdo;

    public $id;
    public $title;
    public $content;
    public $autor;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();
			$stm = $this->pdo->prepare("SELECT * FROM noticia");
			//Ejecución de la sentencia SQL.
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			//Obtener mensaje de error.
			die($e->getMessage());
		}
	}

	public function ListarUser()
	{
		try
		{
			$result = array();
			$stm = $this->pdo->prepare("SELECT * FROM noticia ORDER BY id DESC");
			//Ejecución de la sentencia SQL.
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			//Obtener mensaje de error.
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM noticia WHERE id = ?");

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM noticia WHERE id = ?");

			$stm->execute(array($id));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	
	public function Actualizar($data)
	{
		try
		{
			
			$sql = "UPDATE noticia SET
						title          = ?,
						content        = ?,
            autor        = ?
				    WHERE id = ?";
			
			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->title,
                        $data->content,
                        $data->autor,
                        $data->id
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(noticia $data)
	{
		try
		{
			$sql = "INSERT INTO noticia (id,title,content,autor)
		        VALUES (?, ?, ?, ?)";

			$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->id,
                    $data->title,
                    $data->content,
                    $data->autor,
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
