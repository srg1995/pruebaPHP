<?php
    include_once 'models/producto.php';
    class AyudaModel extends Model{
        public function __construct(){
            parent::__construct();
        }
        //inserto mediante una query los productos
        public function insertProducto($datos){
            $query = $this->database->connect()->prepare('INSERT INTO productos  (NOMBRE, CODIGO, DESCRIPCION) VALUES (:nombre, :codigo, :descripcion)');
            $query->execute(['nombre' => $datos['nombre'], 'codigo' => $datos['codigo'], 'descripcion' => $datos['descripcion']]);
        }

        //funcion que me devuelve la lista de productos
        public function get(){
            $items = [];
            try{

                $query = $this->database->connect()->query("SELECT * FROM productos");
                while($row = $query->fetch()){
                    $item = new Producto();
                    $item->nombre = $row['nombre'];
                    $item->codigo = $row['codigo'];
                    $item->descripcion = $row['descripcion'];

                    array_push($items, $item);
                }
                return $items;
            }catch(PDOException $e){
                return [];
            }
        }

        //funcion que me ordena los productos que se encuentran en la base de datos
        public function orden(){
            $items = [];
            try{

                $query = $this->database->connect()->query("SELECT * FROM productos ORDER BY codigo DESC");
                while($row = $query->fetch()){
                    $item = new Producto();
                    $item->nombre = $row['nombre'];
                    $item->codigo = $row['codigo'];
                    $item->descripcion = $row['descripcion'];

                    array_push($items, $item);
                }
                return $items;
            }catch(PDOException $e){
                return [];
            }
        }
}