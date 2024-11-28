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

        <h2>Actualizar Cliente</h2>
        
    <form action="<?=base_url('Clientes/update/'); ?>" method="POST">
        <div class="mb-3">
            <label for="nombreCliente" class="form-label">Nombre</label>
            <input name="nombreCliente" type="text" value="<?=$cliente[0]->nombreCliente; ?>"
                 class="form-control" id="cliente" placeholder="Inserta tu nombre">
           <input type="hidden" name="idCliente" value="<?=$cliente[0]->idCliente;?>" >
        </div>

        <div class="mb-3">
            <label for="apellidoCliente" class="form-label">Apellidos</label>
            <input name="apellidoCliente" type="text" value="<?=$cliente[0]->apellidoCliente; ?>"
                 class="form-control" id="cliente" placeholder="Inserta tu apellido">
           <input type="hidden" name="idCliente" value="<?=$cliente[0]->idCliente;?>" >
        </div>

        <div class="mb-3">
            <label for="codigoPostal" class="form-label">Código postal</label>
            <input name="codigoPostal" type="text" value="<?=$cliente[0]->codigoPostal; ?>"
                 class="form-control" id="cliente" placeholder="Inserta tu código postal">
           <input type="hidden" name="idCliente" value="<?=$cliente[0]->idCliente;?>" >
        </div>

        <div class="mb-3">
            <label for="fechaRegistro" class="form-label">Fecha del registro</label>
            <input name="fechaRegistro" type="date" value="<?=$cliente[0]->fechaRegistro; ?>"
                 class="form-control" id="cliente" placeholder="Inserta tu fecha de registro">
           <input type="hidden" name="idCliente" value="<?=$cliente[0]->idCliente;?>" >
        </div>

        <div class="mb-3">
            <label for="telefonoCliente" class="form-label">Teléfono del cliente</label>
            <input name="telefonoCliente" type="Tel" value="<?=$cliente[0]->telefonoCliente; ?>"
                 class="form-control" id="cliente" placeholder="Inserta tu teléfono del cliente">
           <input type="hidden" name="idCliente" value="<?=$cliente[0]->idCliente;?>" >
        </div>

        
        <input type="submit" class="btn btn-success" name="Modificar" value="Modificar">
        </form>
    
    </div>
    </div>
</div>
</div>