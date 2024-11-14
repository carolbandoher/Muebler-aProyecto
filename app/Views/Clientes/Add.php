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

        <h2>Agregar Datos</h2>
        <?= validation_list_errors() ?>

    <form action="<?=base_url('Clientes/insert'); ?>" method="POST">
    <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
        <div class="mb-3">
            <label for="nombreCliente" class="form-label">Nombre</label>
            <input name="nombreCliente" type="text" 
            class="form-control" id="idCliente"
            required
            placeholder="Nombre" value="<?= set_value('nombreCliente') ?>" >
        </div>

        <div class="mb-3">
            <label for="apellidoCliente" class="form-label">Apellido del cliente</label>
            <input name="apellidoCliente" type="text" 
            class="form-control" id="idCliente"
            required
            placeholder="Apellido del cliente" value="<?= set_value('apellidoCliente') ?>" >
        </div>

        <div class="mb-3">
            <label for="codigoPostal" class="form-label">Código postal</label>
            <input name="codigoPostal" type="text" 
            class="form-control" id="idCliente"
            required
            placeholder="Código postal" value="<?= set_value('codigoPostal') ?>" >
        </div>

        <div class="mb-3">
            <label for="fechaRegistro" class="form-label">Fecha de registro</label>
            <input name="fechaRegistro" type="date" 
            class="form-control" id="idCliente"
            required
            placeholder="fecha de registro" value="<?= set_value('fechaRegistro') ?>" >
        </div>

        <div class="mb-3">
            <label for="telefonoCliente" class="form-label">Teléfono del cliente</label>
            <input name="telefonoCliente" type="Tel" 
            class="form-control" id="idCliente"
            required
            placeholder="Teléfono del cliente" value="<?= set_value('telefonoCliente') ?>" >
        </div>
        <input type="submit" class="btn btn-success" value="Agregar">
        
    
    </div>
    </div>
</div>
</div>