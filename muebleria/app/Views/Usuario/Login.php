<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso Usuario</title>
    <style>
        body {
            margin: 0;
            height: 70vh;
            display: flex;
            justify-content: flex-end; /* Alinea el contenido a la derecha */
            align-items: center;
            background: url('https://img.freepik.com/fotos-premium/hogar-decoracion-muebles-diseno-interiores-sala-estar-fondo-pared-blanca_221619-1030.jpg') no-repeat center center fixed; /* Cambia esta URL por la de tu fondo */
            background-size: cover;
        }
        .container {
            background-color: rgba(0, 0, 0, 0.7); /* Fondo oscuro y transparente */
            padding: 20px; /* Cambia el padding para un diseño más compacto */
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            color: white; /* Color del texto */
            width: 300px; /* Establece un ancho fijo para el contenedor */
            margin-right: 100px; /* Espacio desde el borde derecho */
        }
        input[type="text"], input[type="pass"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }
        input[type="text"], input[type="pass"] {
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }
        input[type="submit"] {
            background-color: #3b3bff;
            color: white;
            cursor: pointer;
            transition: background 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #5050ff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="<?=base_url('Usuario/acceder'); ?>" method="POST">
                    <input type="text" name="nombreUsuario" placeholder="Nombre de Usuario" required>
                    <br />
                    <input type="pass" name="pass" placeholder="Contraseña" required>
                    <input type="submit" value="Acceder">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
