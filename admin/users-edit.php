<?php

include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Editar Usuario
                    <a href="users.php" class="btn btn-dark float-end">Volver</a>
                </h4>
            </div>
            <div class="container-fluid px-4">
                <div class="card-body"></div>
                <form action="">
                    <div class="row" style="align-items: stretch;">
                        <div class="col-md-6">
                        <div class="mb-3">
                        <label>Nombre:</label>
                        <input type="text" name="name" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="mb-3">
                        <label>Telefono:</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                        </div>                        
                        <div class="col-md-6">
                        <div class="mb-3">
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                        </div>   
                        <div class="col-md-6">
                        <div class="mb-3">
                        <label>Contraseña:</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                        </div>
                        <div class="col-md-6">
                        <div class="mb-3">
                        <label for="role">Seleccionar Cargo</label>
                        <select name="role" class="form-control" id="role">
                            <option value="">Seleccionar</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                        </div>
                        <div class="col-md-6 d-flex aling-items-end justify-content-end">
                        <div class="mb-3">
                    <button type="submit" name="updateUser" class="btn btn-dark">Actualizar</button>
                    </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include('includes/footer.php'); ?>