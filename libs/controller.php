<?php

class Controller{

    function __construct(){
        echo "<p>controlador base</p>";
        $this->view = new View();
    }
}
?>