<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #ececec;
        color: #333;
        background-image: url('https://www.transparenttextures.com/patterns/asfalt-light.png'); /* Textura suave y moderna */
        background-size: cover;
        background-attachment: fixed;
    }

    h1 {
        color: #2f2f2f;
        text-align: center;
        margin-bottom: 20px;
        font-family: 'Helvetica Neue', sans-serif;
        font-size: 2.5em;
        font-weight: 300;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .btn-success {
        background-color: #4CAF50;
        border: none;
        margin-bottom: 20px;
        padding: 10px 20px;
        font-size: 1.1em;
        font-weight: 500;
        border-radius: 30px;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-success:hover {
        background-color: #388E3C;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    .table {
        border-collapse: collapse;
        width: 100%;
        margin: 20px 0;
        background-color: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #fafafa;
    }

    .table-striped tbody tr:hover {
        background-color: #f1f1f1;
        transition: background-color 0.2s ease;
    }

    .table thead {
        background-color: #333;
        color: #fff;
        font-size: 1.1em;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    .table td, .table th {
        padding: 15px;
        text-align: center;
    }

    .btn-danger {
        background-color: #e74c3c;
        border: none;
        padding: 8px 15px;
        font-size: 1em;
        border-radius: 20px;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-danger:hover {
        background-color: #c0392b;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    .btn-warning {
        background-color: #ffca28;
        border: none;
        padding: 8px 15px;
        font-size: 1em;
        border-radius: 20px;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-warning:hover {
        background-color: #ffa000;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    /* Contenedor general */
    .container {
        background-color: rgba(255, 255, 255, 0.95);
        padding: 40px;
        border-radius: 15px;
        max-width: 1200px;
        margin: auto;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    }

</style>


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