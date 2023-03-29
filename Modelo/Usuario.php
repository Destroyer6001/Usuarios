<?php 
    class Usuario{
        private $nombre;
        private $id;

        public function __construct($nombre,$id)
        {
            $this->nombre = $nombre;
            $this->id = $id;
        }

        public function GetNombre()
        {
            return $this->nombre;
        }

        public function GetId()
        {
            return $this->id;
        }

        public function SetNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        public function SetId($id)
        {
            $this->id = $id;
        }
    }



?>