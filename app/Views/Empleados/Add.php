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

    <form action="<?=base_url('Empleados/insert'); ?>" method="POST">
    <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
        <div class="mb-3">
            <label for="nombreEmpleado" class="form-label">Nombre Empleado</label>
            <input name="nombreEmpleado" type="text" 
            class="form-control" id="idEmpleado"
            required
            placeholder="Nombre Empleado" value="<?= set_value('nombreEmpleado') ?>" >
        </div>

        <div class="mb-3">
            <label for="apellidoEmpleado" class="form-label">Apellido del empleado</label>
            <input name="apellidoEmpleado" type="text" 
            class="form-control" id="idEmpleado"
            required
            placeholder="Apellido del empleado" value="<?= set_value('apellidoEmpleado') ?>" >
        </div>

        <div class="mb-3">
            <label for="fechaREmpleado" class="form-label">Fecha de registro empleado</label>
            <input name="fechaREmpleado" type="date" 
            class="form-control" id="idEmpleado"
            required
            placeholder="Fecha de registro empleado" value="<?= set_value('fechaREmpleado') ?>" >
        </div>

        <div class="mb-3">
            <label for="telefonoEmpleado" class="form-label">Telefono del empleado</label>
            <input name="telefonoEmpleado" type="Tel" 
            class="form-control" id="idEmpleado"
            required
            placeholder="Telefono del empleado" value="<?= set_value('telefonoEmpleado') ?>" >
        </div>

        <div class="mb-3">
            <label for="fechaSEmpleado" class="form-label">Fecha de salida empleado</label>
            <input name="fechaSEmpleado" type="date" 
            class="form-control" id="idEmpleado"
            required
            placeholder="Fecha de salida empleado" value="<?= set_value('fechaSEmpleado') ?>" >
        </div>
        <input type="submit" class="btn btn-success" value="Agregar">
        
    
    </div>
    </div>
</div>
</div>