<?php

class Errores extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje = "error al cargar el recurso";
        $this->view->render('errores/index');
        //echo "error controller";
    }
}