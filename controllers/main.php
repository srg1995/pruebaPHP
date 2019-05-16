<?php

    class main extends Controller{
        function __construct(){
            parent::__construct();
            $this->view->render('main/index');
        }

        function saludo(){
            echo "<p>este es un metodo del controller</p>";
        }
    }