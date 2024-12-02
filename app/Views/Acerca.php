<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de Nosotros</title>
    <style>
        /* Estilos globales */
        
{
          margin: 0;
          padding: 0;
          box-sizing: border-box;}

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f9f9f9;
            color: #333;
            padding: 20px;
        }

        .about-section {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .content {
            flex: 1;
        }

        .content h1 {
            font-size: 2rem;
            color: #444;
            margin-bottom: 20px;
        }

        .content p {
            margin-bottom: 15px;
            font-size: 1rem;
            text-align: justify;
        }

        .image {
            flex: 1;
            text-align: center;
        }

        .image img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .about-section {
                flex-direction: column;
                padding: 15px;
            }

            .content h1 {
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <section class="about-section">
       
        <div class="content">
            <h1>Acerca de nosotros</h1>
            <p>
                En Mueblería sus, nos dedicamos a ofrecer muebles de alta calidad que combinan diseño, confort y funcionalidad. 
                Desde nuestros inicios, hemos trabajado con pasión para crear espacios que se adapten a tus necesidades 
                y reflejen tu estilo personal.
            </p>
            <p>
                Nuestro equipo de expertos está comprometido con la excelencia, desde la selección de los mejores materiales 
                hasta el cuidado en cada detalle de la fabricación y distribución de nuestros productos.
            </p>
            <p>
                En Mueblería sus, estamos orgullosos de ser una opción confiable para quienes buscan calidad, estilo y precios justos. 
                Te invitamos a explorar nuestra colección y descubrir cómo podemos ayudarte a transformar tu espacio en el hogar que siempre has soñado.
            </p>
        </div>

        
        <div class="image">
        <img src="<?= base_url('images/Mueble.png') ?>">
        </div>
    </section>
</body>
</html>