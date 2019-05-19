<?php

    class Nuevo extends Controller{
        function __construct(){
            parent::__construct();
            $this->view->render('nuevo/index');
        }

        function registrarCliente(){

            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $dni = $_POST['dni'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
            $this->model->insert([
                'nombre' => $nombre,
                'apellidos' => $apellidos,
                'dni' => $dni,
                'direccion' => $direccion,
                'telefono' => $telefono,
                'email' => $email]
            );
            echo "cliente creado";
        }
    }