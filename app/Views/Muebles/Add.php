<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario - Mueblería</title>
    <style>
       
       .btn-success {
           background-color: #656873; 
           border: none;
           padding: 10px 20px;
           font-size: 1.1em;
           font-weight: 500;
           border-radius: 30px;
           color: #ffffff;
           transition: background-color 0.3s ease, box-shadow 0.3s ease;
           cursor: pointer;
       }

       .btn-success:hover {
           background-color: #4c4e5b; 
           box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
       }

      
       .form-container {
           background-color: #F1EBF2; 
           padding: 30px;
           margin-bottom: 40px; 
           border-radius: 10px;
           box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
           max-width: 600px;
           margin: auto; 
       }

       
       .container {
           padding-bottom: 40px;
       }

       h2 {
           text-align: center;
           color: #333333;
           margin-bottom: 20px;
       }
   </style>
</head>
<body>

<div class="container">
    <div class="form-container">
        <h2>Agregar Muebles</h2>
        <?= validation_list_errors() ?>

        <form action="<?=base_url('Muebles/insert'); ?>" method="POST">
            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
            
            <div class="mb-3">
                <label for="nombreMueble" class="form-label">Nombre del mueble</label>
                <input name="nombreMueble" type="text" 
                class="form-control" id="nombreMueble"
                required
                placeholder="Nombre del Mueble" value="<?= set_value('nombreMueble') ?>" >
            </div>

            <div class="mb-3">
                <label for="descripcionM" class="form-label">Descripción del mueble</label>
                <input name="descripcionM" type="text" 
                class="form-control" id="descripcionM"
                required
                placeholder="Descripción del mueble" value="<?= set_value('descripcionM') ?>" >
            </div>

            <div class="mb-3">
                <label for="precioMueble" class="form-label">Precio del mueble</label>
                <input name="precioMueble" type="text" 
                class="form-control" id="precioMueble"
                required
                placeholder="Precio del mueble" value="<?= set_value('precioMueble') ?>" >
            </div>

            <div class="mb-3">
                <label for="cantidadInventario" class="form-label">Cantidad del inventario</label>
                <input name="cantidadInventario" type="text" 
                class="form-control" id="cantidadInventario"
                required
                placeholder="Cantidad del inventario" value="<?= set_value('cantidadInventario') ?>" >
            </div>

            <div class="mb-3">
                <label for="categoriaMueble" class="form-label">Categoría del mueble</label>
                <input name="categoriaMueble" type="text" 
                class="form-control" id="categoriaMueble"
                required
                placeholder="Categoría del mueble" value="<?= set_value('categoriaMueble') ?>" >
            </div>
            
            <input type="submit" class="btn btn-success" value="Agregar">
        </form>
    </div>
</div>

</body>
</html>
