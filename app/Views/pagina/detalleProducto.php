<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Productos</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .imgPrincipal {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .imgSecundaria {
            width: 70px;
            height: 70px;
            margin: 5px;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            cursor: pointer;
        }
        .imgSecundaria:hover {
            border-color: #ffc107;
        }
        .price {
            font-size: 1.8rem;
            font-weight: bold;
            color: #495057;
        }
        .description {
            font-size: 1rem;
            line-height: 1.5;
            color: #6c757d;
        }
        .btn-add-cart {
            background-color: #ffc107;
            border: none;
            color: #fff;
            font-weight: bold;
        }
        .btn-add-cart:hover {
            background-color: #e0a800;
        }
        .quantity-input {
            display: flex;
            align-items: center;
        }
        .quantity-input input {
            width: 60px;
            text-align: center;
            margin: 0 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
        .stock-info {
            font-size: 0.9rem;
            color: #6c757d;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="ruta-de-la-imagen-principal" alt="Imagen principal" class="imgPrincipal">
                <div class="d-flex mt-3">
                    <img src="ruta-de-la-imagen-secundaria1" alt="Imagen secundaria" class="imgSecundaria">
                    <img src="ruta-de-la-imagen-secundaria2" alt="Imagen secundaria" class="imgSecundaria">
                    <img src="ruta-de-la-imagen-secundaria3" alt="Imagen secundaria" class="imgSecundaria">
                </div>
            </div>
            <div class="col-md-6">
                <h2><?=$producto[0]->nombreMueble ?></h2>
                <p class="price">$<?=$producto[0]->precioMueble;?></p>
                <p class="description"><?=$producto[0]->descripcionM;?></p>
                <form action="<?=base_url('pagina/insertCarrito'); ?>" method="POST">
                    <div class="quantity-input my-3">
                        <button type="button" class="btn btn-light" onclick="adjustQuantity(-1)">-</button>
                        <input type="number" id="cantidad" name="cantidad" value="1" min="1" max="<?=$producto[0]->cantidadInventario;?>" required>
                        <button type="button" class="btn btn-light" onclick="adjustQuantity(1)">+</button>
                    </div>
                    <input type="hidden" value="<?=$producto[0]->idMueble; ?>" name="idMueble">
                    <input type="hidden" value="<?=$producto[0]->precioMueble; ?>" name="costo">
                    <button type="submit" class="btn btn-add-cart w-100">Agregar al carrito</button>
                </form>
                <p class="stock-info"><?=$producto[0]->cantidadInventario;?> disponibles</p>
            </div>
        </div>
    </div>

    <script>
        function adjustQuantity(amount) {
            const input = document.getElementById('cantidad');
            let currentValue = parseInt(input.value);
            const max = parseInt(input.max);
            const min = parseInt(input.min);
            currentValue = Math.min(max, Math.max(min, currentValue + amount));
            input.value = currentValue;
        }
    </script>
</body>
</html>
