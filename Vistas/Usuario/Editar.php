<?php 

    require_once("c://xampp/htdocs/Proyecto/Modelo/Usuario.php");
    require_once("c://xampp/htdocs/Proyecto/Controlador/UsuarioController.php");
    $controladorUsuario = new UsuarioController();

    if(isset($_GET['txtID']))
    {
        $txtId = (isset($_GET['txtID'])?$_GET['txtID']:"");
        $usuario = $controladorUsuario->seleccionar($txtId);
        $nombre = $usuario['nombre'];
    }

    if($_POST)
    {
        $resultado = "";
        $mensaje = "";
        $txtId = (isset($_POST['txtId'])?$_POST['txtId']:"");
        $nombre = (isset($_POST['nombre'])?$_POST['nombre']:"");

        $resultado = $controladorUsuario->validacioneditar($nombre,$txtId);

        if($resultado == false)
        {  
            $usuarioeditar = new Usuario($nombre,$txtId);
            $controladorUsuario->editar($usuarioeditar->GetNombre(),$usuarioeditar->GetId());
        }
        else
        {
            $mensaje = "El puesto ya se encuentra registrado en el sistema";
        }

    }

?>


<?php include("../../Templates/header.php");?>
<div class="card">
    <div class="card-header">
        Editar Usuario
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <?php if(isset($mensaje)) {?>
                <div class="alert alert-danger" role="alert">
                    <strong><?php echo $mensaje ?></strong>
                </div>
            <?php }?>
            <div class="mb-3">
                <label for="txtId" class="form-label">Id</label>
                <input type="text"
                value="<?php echo $txtId;?>"
                class="form-control" readonly name="txtId" id="txtId" aria-describedby="helpId" placeholder="ID">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text"
                value="<?php echo $nombre;?>"
                class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Ingrese su nombre">
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a name="" id="" class="btn btn-success" href="index.php" role="button">Cancelar</a>
        </form>
    </div>
</div>
<?php include("../../Templates/footer.php"); ?>