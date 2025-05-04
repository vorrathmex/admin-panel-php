<?php 
require '../config/function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <title>
        Dashboard Vorrath.Dev
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,800" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="asset/css/nucleo-svg.css" rel="stylesheet" /> 
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link id="pagestyle" href="assets/css/nucleo-svg.css" rel="stylesheet" />                        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- CSS Files -->
        <style>
                /* Sobrescribir el fondo del icono activo en el sidenav */
                .navbar-vertical .navbar-nav > .nav-item .nav-link.active .icon {
            background-image: none !important; /* Quita el degradado */
            background-color: #332F2C !important; /* Establece tu color sólido */
        }

    </style>
    <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?=v1.0.7" rel="stylesheet">
</head>

<body class="g-sidenav-show  bg-gray-100">

    <?php include('sidebar.php')?>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php include('navbar.php')?>

        <div class="container-fluid py-4">




