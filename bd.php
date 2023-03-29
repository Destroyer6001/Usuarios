<?php 
    class BaseDeDatos{
        private $servidor = "localhost";
        private $basededatos = "proyecto";
        private $usuario = "root";
        private $contrasenia = "";

        public function Conexion(){
            try{
                $conexion= new PDO("mysql:host=".$this->servidor.";dbname=".$this->basededatos,$this->usuario,$this->contrasenia);
                return $conexion;
            }catch(Exception $ex){
                return $ex->getMessage();
            }
        }

    }


?>