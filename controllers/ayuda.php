<?php

    class Ayuda extends Controller{
        function __construct(){
            parent::__construct();
            $this->view->mensaje = "";
        }

        /*Por defecto esta vista me devolvera un listado de productos */
        function render(){
            $productos = $this->model->get();
            $this->view->productos = $productos;
            $this->view->render('ayuda/index');
        }

        /*funcion que registra productos que recibe por una llamada ajax */
        function registrarProducto(){

            //recoge el json enviado por ajax
            $json = json_decode(file_get_contents('php://input'), true);
            $mensaje = "";

            try{
                //por cada producto hace una insercion
                foreach ($json as $product) {

                    $nombre = $product["nombre"];
                    $codigo = $product["codigo"];
                    $descripcion = $product["descripcion"];


                    $this->model->insertProducto([
                        'nombre' => $nombre,
                        'codigo' => $codigo,
                        'descripcion' => $descripcion
                    ]);
                }
                echo "ok";
            }catch(PDOException $e){
                echo "ko";
            }

            $this->view->mensaje = $mensaje;
            $this->render();
        }

        /*funcion que ordena los productos que estan introducidos en la base de datos */
        function ordenarProductos(){
            $productos = $this->model->orden();
            $this->view->productos = $productos;
            $this->view->render('ayuda/index');
        }

    }
?>