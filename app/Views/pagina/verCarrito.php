<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Carrito de Compras</h1>

        <!-- Mostrando el contenido del carrito y nombre del mueble 
        <pre class="bg-light p-3 border rounded mb-4">
            <?php print_r($session->get('carrito')); ?>
            <?php echo $session->get('nombreMueble'); ?>
        </pre>-->

        <!-- Tabla de productos en el carrito -->
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID Mueble</th>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Costo</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php $total = 0; ?>
                <?php foreach($session->get('carrito') as $item) : ?>
                    <?php $total += $item['costo'] * $item['cantidad']; ?>
                    <tr>
                        <td><?= $item['idMueble']; ?></td>
                        <td><?= $item['nombre']; ?></td>
                        <td><?= $item['cantidad']; ?></td>
                        <td><?= $item['costo']; ?> MXN</td>
                        <td><?= $item['subtotal']; ?> MXN</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Formulario de pago -->
        <form action="<?= base_url('pagina/pagar'); ?>" method="POST">
            <input type="hidden" name="total" value="<?= $total; ?>">
            <button type="submit" class="btn btn-success btn-lg">Pagar</button>
        </form>

        <!-- Mostrar el total -->
        <h2 class="mt-4">Total: <?= $total; ?> MXN</h2>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
