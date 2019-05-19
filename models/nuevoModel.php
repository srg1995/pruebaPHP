<?php
    class NuevoModel extends Model{
        public function __construct(){
            parent::__construct();
        }
        public function insert($datos){
            echo "insertar datois";
            $query = $this->database->connect()->prepare('INSERT INTO clientes  (NOMBRE, APELLIDOS, DNI, DIRECCION, TELEFONO, EMAIL) VALUES (:nombre, :apellidos, :dni, :direccion, :telefono, :email)');
            $query->execute(['nombre' => $datos['nombre'], 'apellidos' => $datos['apellidos'], 'dni' => $datos['dni'], 'direccion' => $datos['direccion'], 'telefono' => $datos['telefono'], 'email' => $datos['email']]);
        }
}