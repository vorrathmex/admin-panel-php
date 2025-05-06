<?php

include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Agregar Usuario
                    <a href="users.php" class="btn btn-dark float-end">Volver</a>
                </h4>
            </div>
            <div class="container-fluid px-4">
                <div class="card-body"></div>
                <?php alertMessage();?>
                <form action="code.php" method="POST">
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
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label>Seleccionar Cargo</label>
                                <select name="role" class="form-select">
                                    <option value="">Seleccionar Cargo</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label>Es Ban</label>
                                <br>
                                <input type="checkbox" name="is_ban" style="width:30px;height:30px">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 text-end">
                                <br>
                                <button type="submit" name="saveUser" class="btn btn-dark">Guardar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php');?>