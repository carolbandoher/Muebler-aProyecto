<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encabezado - Mueblería</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
   
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #636363;
            color: #ffffff;
            padding: 10px 0;
            font-size: 0.9em;
        }

        .header-container {
            max-width: 1200px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
        }

        .logo {
            display: flex;
            align-items: center;
            height: 50px;
            width: 50px;
        }

        .logo img {
            height: 100px;
            width: 100px;
            margin-right: 10px;
        }

        .logo h1 {
            font-size: 1.5em;
            margin: 0;
            color: #ffffff;
        }

        .contact-info {
            display: flex;
            align-items: center;
            gap: 20px;
            font-size: 0.9em;
        }

        .contact-info a {
            color: #ffffff;
            text-decoration: none;
        }

        .contact-info i {
            margin-right: 5px;
        }

        .nav-bar {
            background-color: #545454;
            padding: 10px 0;
        }

        .nav-container {
            max-width: 1200px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .nav-links a {
            color: #ffffff;
            text-decoration: none;
            font-size: 0.9em;
        }

        .nav-links a:hover {
            text-decoration: underline;
        }

        .search-bar {
            position: relative;
        }

        .search-bar input[type="text"] {
            padding: 5px;
            border: none;
            border-radius: 5px;
            padding-left: 25px;
            background-color: #e0e0e0;
        }

        .search-bar i {
            position: absolute;
            left: 8px;
            top: 7px;
            color: #545454;
        }

        .user-icons {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-icons a {
            color: #ffffff;
            text-decoration: none;
            font-size: 1.2em;
        }

        .user-avatar {
            border-radius: 50%;
            width: 30px;
            height: 30px;
            overflow: hidden;
        }

        .user-avatar img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

    
    <header>
        <div class="header-container">
            
            <div class="logo img">
            <img src="<?= base_url('images/image-removebg-preview.png') ?>" alt="Logo" class="logo">
                <h1>Mueblería</h1>
            </div>
            
            
            <div class="contact-info">
                <a href="mailto:Furnicom@gmail.com">
                    <i class="fa fa-envelope"></i> Furnicom@gmail.com
                </a>
                <a href="tel:+522317671028">
                    <i class="fa fa-phone"></i> +52 2317671028
                </a>
            </div>

         
            <div class="user-icons">
                <a href="/Usuario"><i class="fa fa-lock"></i> login</a>
                
                <a href="/pagina/verCarrito"><i class="fa fa-shopping-cart"></i></a>
            </div>
        </div>
    </header>

    <!-- Barra de navegación -->
    <div class="nav-bar">
        <div class="nav-container">
            <!-- Enlaces de navegación -->
            <div class="nav-links">
                <a href="/front/Principal"><i class="fa fa-home"></i> Inicio</a>
                <a href="/Acerca">Acerca de nosotros</a>
                <a href="/pagina">Productos</a>
            </div>
            
          
<div class="search-bar">
    <form action="<?= base_url('busqueda') ?>" method="get">
        <i class="fa fa-search"></i>
        <input type="text" name="query" placeholder="Buscar..." value="<?= isset($query) ? esc($query) : '' ?>">
    </form>
</div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</body>
</html>