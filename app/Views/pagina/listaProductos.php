<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        .producto {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            text-align: center;
            margin-bottom: 20px;
        }
        .producto h3 {
            font-size: 1.2rem;
            color: #343a40;
        }
        .imgPrincipal {
            width: 100%;
            height: 200px;
            background-color: #e9ecef;
            border-radius: 8px;
            margin: 10px 0;
        }
        .producto p {
            font-size: 0.9rem;
            color: #6c757d;
        }
        .btn-success {
            background-color: #ffc107;
            border: none;
            color: #ffffff;
            font-weight: bold;
        }
        .btn-success:hover {
            background-color: #e0a800;
        }
        @media (min-width: 768px) {
            .producto {
                padding: 20px;
            }
            .imgPrincipal {
                height: 250px;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <h1 class="mb-4 text-center">Decora tu hogar a tu estilo</h1>
        <div class="row">
            <?php foreach ($producto as $key) : ?>
                <div class="col-12 col-sm-6 col-md-4 producto">
                    <h3><?= $key->nombreMueble; ?></h3>
                    <div class="imgPrincipal">
                        <img src="<?= base_url('images/'.$key->imagenes);  ?>" alt="imagen">
                      
                    </div> 
                    <p><?= $key->descripcionM; ?></p>
                    <p class="text-primary font-weight-bold">$<?= $key->precioMueble; ?></p>
                    <a href="<?= base_url('pagina/producto/') . $key->idMueble; ?>" class="btn btn-success w-100">Ver Detalle</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
