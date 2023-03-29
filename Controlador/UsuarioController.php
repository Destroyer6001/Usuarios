<?php 

    class UsuarioController{

        private $servicio;

        public function __construct()
        {
            require_once("c://xampp/htdocs/Proyecto/Servicios/ServicioUsuarios.php");
            $this->servicio = new ServicioUsuario();
        }

        public function crear($nombre)
        {
            $this->servicio->Guardar($nombre);
            header("Location:index.php"); 
        }

        public function listar()
        {
            $listado = $this->servicio->Mostrar();
            return $listado;
        }

        public function seleccionar($id)
        {
            $usuario = $this->servicio->Obtener($id);
            return $usuario;
        }

        public function editar($nombre, $id)
        {
            $this->servicio->Actualizar($id, $nombre);
            header("Location:index.php");
        }

        public function borrar($id)
        {
            $this->servicio->Eliminar($id);
            header("Location:index.php");
        }

        public function validarcrear($nombre)
        {
            $resultado = $this->servicio->ValidarCreacion($nombre);
            return $resultado;
        }

        public function validacioneditar($nombre,$id)
        {
            $resultado = $this->servicio->ValidarEditar($nombre,$id);
            return $resultado;
        }
    }
?>