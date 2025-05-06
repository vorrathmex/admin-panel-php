<?php 

include('includes/header.php');?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Lista de Usuarios
                    <a href="users-create.php" class="btn btn-danger float-end">Agregar Usuario</a>
                </h4>
            </div>
            <div class="card-body">

            <?php alertMessage();?>
            
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>nombre</td>
                            <td>email</td>
                            <td>telefono</td>
                            <td>
                                <a href="users-edit.php" class="btn btn-secondary btn-sm">Editar</a>
                                <a href="users-delete.php" class="btn btn-danger btn-sm mx-2">Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php');?>

