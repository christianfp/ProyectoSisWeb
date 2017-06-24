<?php

  require_once 'model/database.php';

  
  $control = 'noticia';

  
  if(!isset($_REQUEST['c']))
  {
    
    require_once dirname(__FILE__).'../controller/noticia.controller.php';
    $control = ucwords($control) . 'Controller';
    $control = new $control;
    $control->Index();
  }
  else
  {
    
    $control = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';

    require_once dirname(__FILE__).'../controller/noticia.controller.php';
    $control = ucwords($control) . 'Controller';
    $control = new $control;

  
    call_user_func( array( $control, $accion ) );
  }
