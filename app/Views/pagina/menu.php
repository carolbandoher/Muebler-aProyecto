<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="<?=base_url()?>css/bootstrap.min.css">
    <style>
        .imgPrincipal {width: 90%; height: 450px; background-color: darkgrey; display: block;}
        .imgSecundaria {width: 90%; height: 200px; background-color: darkgreen; display: block; margin-bottom: 20px;}
        .producto {margin-bottom: 60px;}
    </style>
</head>
<body>
<?php $session = session(); ?>
<nav class="navbar navbar-expand-lg bg-body-tertiary"> 
      
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('pagina')?>">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('pagina/login')?>">Ingresar</a>
            </li>


            <?php if($session->get('Logueo')!=null): ?> 
                <li class="nav-item">
                <a class="nav-link" href="<?=base_url('pagina/verCarrito')?>">Ver carrito</a>
            </li>    
            <?php endif ?>    
            


            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
</nav>