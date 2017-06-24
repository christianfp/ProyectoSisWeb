<?php
require_once 'model/noticia.php';

class NoticiaController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new noticia();
    }

    public function Index(){
   
        require_once 'view/noticia/noticia.php';
     
    }
    public function Noticia(){
       
        require_once 'view/noticia/noticias.php';
       
    }

    public function Crud(){
        $pvd = new noticia();

        if(isset($_REQUEST['id'])){
            $pvd = $this->model->Obtener($_REQUEST['id']);
        }

      
        require_once 'view/noticia/noticia-editar.php';
       
  }

    public function Nuevo(){
        $pvd = new noticia();
        require_once 'view/noticia/noticia-nuevo.php'; 
    }

    public function Guardar(){
        $pvd = new noticia();

        $pvd->id = $_REQUEST['id'];
        $pvd->title = $_REQUEST['title'];
        $pvd->content = $_REQUEST['content'];
        $pvd->autor = $_REQUEST['autor'];
        $pvd->image = $_REQUEST['image'];
        $this->model->Registrar($pvd);

        header('Location: index.php');
    }

    public function Editar(){
        $pvd = new noticia();

        $pvd->id = $_REQUEST['id'];
        $pvd->title = $_REQUEST['title'];
        $pvd->content = $_REQUEST['content'];
        $pvd->autor = $_REQUEST['autor'];
        $pvd->image = $_REQUEST['image'];

        $this->model->Actualizar($pvd);

        header('Location: index.php');
    }
    
    public function MostrarNoticia(){

    	$pvd = new noticia();

        if(isset($_REQUEST['id'])){
            $pvd = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/noticia/mostrarNoticia.php';
     
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}
