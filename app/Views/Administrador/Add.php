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

    <form action="<?=base_url('Administrador/insert'); ?>" method="POST">
    <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
        <div class="mb-3">
            <label for="nombreUsuario" class="form-label">Nombre</label>
            <input name="nombreUsuario" type="text" 
            class="form-control" id="idCliente"
            required
            placeholder="Nombre" value="<?= set_value('nombreUsuario') ?>" >
        </div>

        <div class="mb-3">
            <label for="apellidoPaterno" class="form-label">Apellido paterno</label>
            <input name="apellidoPaterno" type="text" 
            class="form-control" id="idCliente"
            required
            placeholder="Apellido paterno" value="<?= set_value('apellidoPaterno') ?>" >
        </div>

        <div class="mb-3">
            <label for="apellidoMaterno" class="form-label">Apellido Materno</label>
            <input name="apellidoMaterno" type="text" 
            class="form-control" id="idCliente"
            required
            placeholder="Apellido materno" value="<?= set_value('apellidoMaterno') ?>" >
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input name="telefono" type="tel" 
            class="form-control" id="idCliente"
            required
            placeholder="Teléfono" value="<?= set_value('telefono') ?>" >
        </div>

        <div class="mb-3">
            <label for="correo" class="form-label">Correo electrónico</label>
            <input name="correo" type="email" 
            class="form-control" id="idCliente"
            required
            placeholder="Correo electrónico" value="<?= set_value('correo') ?>" >
        </div>

        <div class="mb-3">
            <label for="rol" class="form-label">Rol</label>
            <input name="rol" type="Tel" 
            class="form-control" id="idCliente"
            required
            placeholder="Rol" value="<?= set_value('rol') ?>" >
        </div>

        <div class="mb-3">
            <label for="pass" class="form-label">Password</label>
            <input name="pass" type="text" 
            class="form-control" id="idCliente"
            required
            placeholder="Password" value="<?= set_value('pass') ?>" >
        </div>

        <input type="submit" class="btn btn-success" value="Agregar">
        
    
    </div>
    </div>
</div>
</div>