<?php 

require 'config/function.php';

if(isset($_POST['saveUser']))
{
    $name = validate( $_POST['name']);
    $phone = validate( $_POST['phone']);
    $email = validate( $_POST['email']);
    $password = validate( $_POST['password']);
    $is_ban = validate( $_POST['is_ban']);
    $role = validate( $_POST['role']);


    if($name != '' || $phone != ''|| $email != ''|| $password != ''){

        $query = "INSERT INTO `users`(name,phone,email,password,is_ban,role) 
                    VALUES ('$name', '$phone', '$email', '$password', '$is_ban', '$role')";

                    $result = mysqli_query($conn, $query);
                    if($result){
                        redirect('users.php','Usuario agregado satisfactoriamente!');
                    }else{
                        redirect('users-create.php','Algo salió mal');
                    }
    }else{
    redirect('users-create.php','Por favor rellenar todos los campos');
    }
}
?>