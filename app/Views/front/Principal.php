<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mueblería</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <header>
        <div class="header-top">
            <img src="<?= base_url('images/image-removebg-preview.png') ?>" alt="Logo" class="logo">
            <div class="contact-info">
                <a href="mailto:susexample182@gmail.com">susexample182@gmail.com</a> |
                <a href="tel:+522317671028">+52 2317671028</a>
            </div>
            <div class="user-options">
                <a href="#" class="login">Login</a>
                <img src="<?= base_url('images/user-profile.jpg') ?>" alt="Profile" class="profile-pic">
                <a href="#" class="cart">🛒</a>
            </div>
        </div>
        <nav class="navbar">
            <a href="#">Inicio</a>
            <a href="#">Catálogos</a>
            <a href="#">Categorías</a>
            <input type="search" placeholder="Buscar..." class="search-bar">
        </nav>
    </header>
    <main>
        <section class="banner">
            <h1>Decora tu hogar a tu estilo</h1>
            <p>Personaliza tu espacio al mejor precio</p>
            <img src="<?= base_url('images/sofa.png') ?>" alt="Sofá" class="sofa-img">
        </section>
    </main>
</body>
</html>