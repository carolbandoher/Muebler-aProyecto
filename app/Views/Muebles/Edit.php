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

<div class="form-container">
<div class="container">
    <div class="row">
        <div class="col">

        <h2>Actualizar Mueble</h2>
       
    <form action="<?=base_url('Muebles/update/'); ?>" method="POST">
        <div class="mb-3">
            <label for="nombreMueble" class="form-label">Nombre del mueble</label>
            <input name="nombreMueble" type="text" value="<?=$Mue[0]->nombreMueble; ?>"
                 class="form-control" id="mueble" placeholder="Inserta el nombre del mueble">
           <input type="hidden" name="idMueble" value="<?=$Mue[0]->idMueble;?>" >
        </div>

        <div class="mb-3">
            <label for="descripcionM" class="form-label">Descripción del mueble</label>
            <input name="descripcionM" type="text" value="<?=$Mue[0]->descripcionM; ?>"
                 class="form-control" id="mueble" placeholder="Inserta la descripción del mueble">
           <input type="hidden" name="idMueble" value="<?=$Mue[0]->idMueble;?>" >
        </div>

        <div class="mb-3">
            <label for="precioMueble" class="form-label">Precio del mueble</label>
            <input name="precioMueble" type="text" value="<?=$Mue[0]->precioMueble; ?>"
                 class="form-control" id="mueble" placeholder="Inserta el precio del mueble">
           <input type="hidden" name="idMueble" value="<?=$Mue[0]->idMueble;?>" >
        </div>

        <div class="mb-3">
            <label for="cantidadInventario" class="form-label">Cantidad del inventario</label>
            <input name="cantidadInventario" type="text" value="<?=$Mue[0]->cantidadInventario; ?>"
                 class="form-control" id="mueble" placeholder="Cantidad del inventario">
           <input type="hidden" name="idMueble" value="<?=$Mue[0]->idMueble;?>" >
        </div>

        <div class="mb-3">
            <label for="categoriaMueble" class="form-label">Categoría del mueble</label>
            <input name="categoriaMueble" type="text" value="<?=$Mue[0]->categoriaMueble; ?>"
                 class="form-control" id="cliente" placeholder="Inserta la categoía del mueble">
           <input type="hidden" name="idMueble" value="<?=$Mue[0]->idMueble;?>" >
        </div>

        
        <input type="submit" class="btn btn-success" name="Modificar" value="Modificar">
        </form>
    
    </div>
    </div>
</div>
</div>