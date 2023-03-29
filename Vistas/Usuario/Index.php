<?php

require_once("c://xampp/htdocs/Proyecto/Controlador/UsuarioController.php");
$usuarios = new UsuarioController;
$listado_usuarios = $usuarios->listar();

if(isset($_GET['txtID']))
{
    $id = (isset($_GET['txtID'])?$_GET['txtID']:"");
    $usuarios->borrar($id);
}

?>



<?php include("../../Templates/header.php");?>
<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="Crear.php" role="button">Agregar</a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($listado_usuarios as $usuarios) {?>
                        <tr class="">
                            <td><?php echo $usuarios['id'];?></td>
                            <td><?php echo $usuarios['nombre'];?></td>
                            <td>
                                <a name="" id="" class="btn btn-info" href="Editar.php?txtID=<?php echo $usuarios['id'];?>" role="button">Editar</a>
                                <a name="" id="" class="btn btn-danger" href="Index.php?txtID=<?php echo $usuarios['id'];?>" role="button">Borrar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</div>

<?php include("../../Templates/footer.php"); ?>