<?php
$url_base="http://localhost/restaurant/admin/";
?>


<!doctype html>
<html lang="en">
<head>
    <title>Panel Administrador</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    />
</head>

<body>

<header>

<!-- menu navegable -->
<nav class="navbar navbar-expand navbar-light bg-light">

<div class="nav navbar-nav">

<a class="nav-item nav-link active" href="#" aria-current="page">
Administrador
</a>

<!-- Agregar algunos enlaces -->

<a class="nav-item nav-link" href="../seccion/banners/index.php">Banners</a>

<a class="nav-item nav-link" href="<?php echo $url_base;?>/sección/colaboradores/">Colaboradores</a>

<a class="nav-item nav-link" href="<?php echo $url_base;?>/sección/banner/testimonios/">Testimonios</a>

<a class="nav-item nav-link" href="<?php echo $url_base;?>/sección/banner/menu/">Menu</a>

<a class="nav-item nav-link" href="<?php echo $url_base;?>/sección/comentario/">Comentarios</a>

<a class="nav-item nav-link" href="<?php echo $url_base;?>/sección/usuarios/">Usuarios</a>

<a class="nav-item nav-link" href="#">Cerrar sesión</a>

</div>

</nav>

</header>

<main class="container mt-4">

<section class="container">