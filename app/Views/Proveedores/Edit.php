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


<div class="container">
    <div class="row">
        <div class="col">

        <h2>Actualizar Empleado</h2>
        
    <form action="<?=base_url('Proveedores/update/'); ?>" method="POST">
        <div class="mb-3">
            <label for="nombreProveedor" class="form-label">Nombre del proveedor</label>
            <input name="nombreProveedor" type="text" value="<?=$Pro[0]->nombreProveedor; ?>"
                 class="form-control" id="proveedor" placeholder="Inserta el nombre del proveedor">
           <input type="hidden" name="idProveedor" value="<?=$Pro[0]->idProveedor;?>" >
        </div>

        <div class="mb-3">
            <label for="apellidoProveedor" class="form-label">Apellido del proveedor</label>
            <input name="apellidoProveedor" type="text" value="<?=$Pro[0]->apellidoProveedor; ?>"
                 class="form-control" id="proveedor" placeholder="Inserta el apellido del proveedor">
           <input type="hidden" name="idProveedor" value="<?=$Pro[0]->idProveedor;?>" >
        </div>

        <div class="mb-3">
            <label for="apellidoProveedor" class="form-label">Apellido del proveedor</label>
            <input name="apellidoProveedor" type="text" value="<?=$Pro[0]->apellidoProveedor; ?>"
                 class="form-control" id="proveedor" placeholder="Inserta el apellido del proveedor">
           <input type="hidden" name="idProveedor" value="<?=$Pro[0]->idProveedor;?>" >
        </div>

        <div class="mb-3">
            <label for="NIF" class="form-label">NIF del proveedor</label>
            <input name="NIF" type="text" value="<?=$Pro[0]->NIF; ?>"
                 class="form-control" id="Proveedor" placeholder="Inserta el NIF del proveedor">
           <input type="hidden" name="idProveedor" value="<?=$Pro[0]->idProveedor;?>" >
        </div>

        <div class="mb-3">
            <label for="telefonoProveedor" class="form-label">Telefono del proveedor</label>
            <input name="telefonoProveedor" type="text" value="<?=$Pro[0]->telefonoProveedor; ?>"
                 class="form-control" id="Proveedor" placeholder="Inserta el telefono del proveedor">
           <input type="hidden" name="idProveedor" value="<?=$Pro[0]->idProveedor;?>" >
        </div>

        
        <input type="submit" class="btn btn-success" name="Modificar" value="Modificar">
        </form>
    
    </div>
    </div>
</div>