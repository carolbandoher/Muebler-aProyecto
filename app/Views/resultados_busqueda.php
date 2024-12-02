<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de búsqueda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Resultados para: "<?= esc($query) ?>"</h2>
        <?php if (empty($resultados)) : ?>
            <p>No se encontraron resultados.</p>
        <?php else : ?>
            <div class="row">
                <?php foreach ($resultados as $mueble) : ?>
                    <div class="col-md-4">
                        <div class="card mb-4">
                             <div class="card-body">
                                <h5 class="card-title"><?= esc($mueble->nombreMueble) ?></h5>
                                <p class="card-text"><?= esc($mueble->descripcionM) ?></p>
                                <p class="card-text"><strong>Precio: </strong><?= esc($mueble->precioMueble) ?> MXN</p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
