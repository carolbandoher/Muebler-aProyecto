<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer - Mueblería</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <style>
        
        footer {
            background-color: #3a3a3a;
            color: #ffffff;
            padding: 20px 10px;
            font-family: 'Arial', sans-serif;
            overflow: hidden;
        }

        .footer-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: auto;
            opacity: 0;
            animation: fadeIn 1.5s ease forwards;
        }

        .footer-section {
            flex: 1;
            margin: 5px;
            min-width: 200px; 
        }

        .footer-section h3 {
            font-size: 1em;
            margin-bottom: 10px;
            color: #b0b0b0;
            transform: translateY(30px);
            opacity: 0;
            animation: slideInUp 0.8s ease forwards;
            animation-delay: 0.3s;
        }

        .footer-section p, .footer-section img {
            font-size: 0.8em;
            line-height: 1.4; 
            color: #d0d0d0;
            transform: translateY(30px);
            opacity: 0;
            animation: slideInUp 0.8s ease forwards;
            animation-delay: 0.5s;
        }

        .footer-section img {
            width: 100%;
            max-width: 120px; 
            margin-top: 5px;
        }

        .footer-nav {
            display: flex;
            justify-content: center;
            margin-top: 10px; 
            font-size: 0.8em; 
        }

        .footer-nav a {
            color: #ffffff;
            margin: 0 10px; 
            text-decoration: none;
            position: relative;
            transition: color 0.3s ease;
        }

        .footer-nav a:hover {
            color: #d0d0d0;
        }

      
        .footer-nav a::after {
            content: "";
            position: absolute;
            bottom: -3px;
            left: 0;
            right: 0;
            height: 2px;
            background-color: #ffffff;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .footer-nav a:hover::after {
            transform: scaleX(1);
        }

        .social-icons {
            display: flex;
            justify-content: center;
            margin-top: 10px; 
        }

        .social-icons a {
            color: #ffffff;
            margin: 0 8px; 
            font-size: 1em; 
            transition: transform 0.3s ease, color 0.3s ease;
        }

        .social-icons a:hover {
            color: #d0d0d0;
            transform: translateY(-3px) scale(1.1);
        }

        .copyright {
            text-align: center;
            font-size: 0.7em; 
            color: #999999;
            margin-top: 10px; 
            opacity: 0;
            animation: fadeIn 1s ease forwards;
            animation-delay: 1.2s;
        }


        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>


    <footer>
        <div class="footer-container">
         
            <div class="footer-section">
                <h3>Acerca de</h3>
                <p>En Mueblería, nos especializamos en ofrecer muebles de diseño contemporáneo que se adaptan a cada estilo de vida. Creamos espacios que son una extensión de tu personalidad, brindando muebles funcionales, modernos y de alta calidad.</p>
                <p>Con años de experiencia en el mercado, hemos construido una reputación basada en la confianza y satisfacción de nuestros clientes.</p>
                <img src="<?= base_url('images/image-removebg-preview.png') ?>" alt="Logo" class="logo">
            </div>

           
            <div class="footer-section">
                <h3>Trabajos recientes</h3>
                <p><strong>Octubre 19, 2024</strong></p>
                <p>Esta fue nuestra última entrega del día, realizada con éxito en una zona residencial. La cama estaba completamente empaquetada para transportar muebles de manera segura.</p>
                <img src="ruta/a/la/imagen.jpg" alt="Imagen de trabajo reciente">
            </div>
        </div>


        <div class="footer-nav">
            <a href="#">Inicio</a>
            <a href="#">Catálogos</a>
            <a href="#">Categorías</a>
        </div>

        <div class="social-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>

        
        <div class="copyright">
            &copy; 2024 Furnicom, Inc and Web Templates Ltd. All Rights Reserved
        </div>
    </footer>

   
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
