<?php 

    class ServicioUsuario{
        private $conexion;

        public function __construct()
        {
            require_once("c://xampp/htdocs/Proyecto/bd.php");
            $con = new BaseDeDatos();
            $this->conexion = $con->Conexion();
        }

        public function Guardar($nombre)
        {
            $sentencia = $this->conexion->prepare("INSERT INTO usuarios(id,nombre) VALUES (null,:nombre)");
            $sentencia->bindParam(":nombre",$nombre);
            $sentencia->execute();
        }

        public function Mostrar()
        {
            $sentencia = $this->conexion->prepare("SELECT * FROM usuarios");
            $sentencia->execute();
            $listadeusuarios = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return  $listadeusuarios;
        }

        public function Obtener($id)
        {
            $sentencia = $this->conexion->prepare("SELECT * FROM usuarios WHERE id = :id");
            $sentencia->bindParam(":id",$id);
            $sentencia->execute();
            $usuario = $sentencia->fetch(PDO::FETCH_LAZY);
            return $usuario;
        }

        public function Actualizar($id, $nombre)
        {
            $sentencia = $this->conexion->prepare("UPDATE usuarios SET nombre = :nombre WHERE id = :id");
            $sentencia->bindParam(":nombre",$nombre);
            $sentencia->bindParam(":id",$id);
            $sentencia->execute();
        }

        public function Eliminar($id)
        {
            $sentencia = $this->conexion->prepare("DELETE FROM usuarios WHERE id = :id");
            $sentencia->bindParam(":id",$id);
            $sentencia->execute();
        }

        public function ValidarCreacion($nombre)
        {
            $validacion = false;
            $sentencia = $this->conexion->prepare("SELECT * FROM usuarios WHERE nombre = :nombre");
            $sentencia->bindParam(":nombre",$nombre);
            $sentencia->execute();
            $usuario = $sentencia->fetch(PDO::FETCH_LAZY);

            if($usuario != null)
            {
                $validacion = true;
            }

            return $validacion;
        }

        public function ValidarEditar($nombre, $id)
        {
            $validacion = false;
            $sentencia = $this->conexion->prepare("SELECT * FROM usuarios WHERE nombre = :nombre AND id != :id");
            $sentencia->bindParam(":nombre",$nombre);
            $sentencia->bindParam(":id",$id);
            $sentencia->execute();
            $usuario = $sentencia->fetch(PDO::FETCH_LAZY);

            if($usuario != null)
            {
                $validacion = true;
            }

            return $validacion;
        }
    }



?>