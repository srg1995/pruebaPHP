<?php

    class Nuevo extends Controller{
        function __construct(){
            parent::__construct();
            $this->view->mensaje = "";
        }

        function render(){
            $this->view->render('nuevo/index');
        }

        //funcion que me intenta registrar un cliente
        function registrarCliente(){

            $mensaje = "";
            try{
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
                $mensaje = "cliente creado";
            }catch(PDOException $e){
                $mensaje = "ya existe este cliente";
            }

            $this->view->mensaje = $mensaje;
            $this->render();


        }

    }