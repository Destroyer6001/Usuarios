<?php 
    require_once("c://xampp/htdocs/Proyecto/Modelo/Usuario.php");
    require_once("c://xampp/htdocs/Proyecto/Controlador/UsuarioController.php");

    $controladorUsuario = new UsuarioController();

    if($_POST)
    {
        $mensaje = "";
        $validacion = "";
        $nombre = (isset($_POST['nombre'])?$_POST['nombre']:"");
        $id = 0;

        $validacion = $controladorUsuario->validarcrear($nombre);

        if($validacion == false)
        {
            $usuario = new Usuario($nombre,$id);
            $controladorUsuario->crear($usuario->GetNombre());
        }
        else
        {
            $mensaje = "El puesto ya se encuentra registrado en el sistema";
        }
    }


?>

<?php include("../../Templates/header.php"); ?>

<div class="card">
    <div class="card-header">
        Crear Usuario
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <?php if(isset($mensaje)) {?>
                <div class="alert alert-danger" role="alert">
                    <strong><?php echo $mensaje ?></strong>
                </div>
            <?php }?>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text"
                    value = "<?php if(isset($nombre)) echo $nombre;?>"
                    class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Ingrese su nombre">
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a name="" id="" class="btn btn-success" href="index.php" role="button">Cancelar</a>
        </form>
    </div>
</div>

<?php include("../../Templates/footer.php"); ?>