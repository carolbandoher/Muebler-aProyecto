<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso Usuario</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4; /* Fondo neutro */
            color: #333; /* Texto oscuro */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: #ffffff; /* Fondo blanco */
            border: 1px solid #ddd; /* Borde sutil */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra ligera */
            display: flex;
            flex-direction: column; /* Asegura que los elementos estén en columna */
            justify-content: space-between;
            height: auto;
        }

        h1 {
            font-size: 1.8em;
            color: #555; /* Color intermedio */
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="text"], 
        input[type="password"], 
        input[type="submit"] {
            width: 100%;
            padding: 10px 15px; /* Espaciado interior uniforme */
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
            box-sizing: border-box; /* Asegura que el padding no desborde */
        }

        input[type="text"]::placeholder, 
        input[type="password"]::placeholder {
            color: #aaa; /* Color de los placeholders */
            font-size: 0.95em; /* Tamaño ligeramente más pequeño */
            line-height: 1.5; /* Ajusta el espaciado vertical */
        }

        input[type="submit"] {
            background-color: #007BFF; /* Azul */
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3; /* Azul oscuro */
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .footer {
            margin-top: 20px;
            font-size: 0.9em;
            color: #777;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Iniciar Sesión</h1>
        <form action="<?= base_url('Usuario/acceder'); ?>" method="POST">
            <input type="text" name="nombreUsuario" placeholder="Nombre de Usuario" required>
            <input type="password" name="pass" placeholder="Contraseña" required>
            <input type="submit" value="Acceder">
        </form>
        <div class="footer">© 2024 - Mueblería</div>
    </div>
</body>
</html>
