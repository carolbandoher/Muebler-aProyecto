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

        <h2>Actualizar Empleado</h2>
        
    <form action="<?=base_url('Empleados/update/'); ?>" method="POST">
        <div class="mb-3">
            <label for="nombreEmpleado" class="form-label">Nombre del Empleado</label>
            <input name="nombreEmpleado" type="text" value="<?=$Emp[0]->nombreEmpleado; ?>"
                 class="form-control" id="empleado" placeholder="Inserta el nombre del empleado">
           <input type="hidden" name="idEmpleado" value="<?=$Emp[0]->idEmpleado;?>" >
        </div>

        <div class="mb-3">
            <label for="apellidoEmpleado" class="form-label">Apellidos Empleado</label>
            <input name="apellidoEmpleado" type="text" value="<?=$Emp[0]->apellidoEmpleado; ?>"
                 class="form-control" id="Empleado" placeholder="Inserta el apellido del empleado">
           <input type="hidden" name="idEmpleado" value="<?=$Emp[0]->idEmpleado;?>" >
        </div>

        <div class="mb-3">
            <label for="fechaREmpleado" class="form-label">Fecha registro</label>
            <input name="fechaREmpleado" type="date" value="<?=$Emp[0]->fechaREmpleado; ?>"
                 class="form-control" id="Empleado" placeholder="Inserta la fecha de regristro empleado">
           <input type="hidden" name="idEmpleado" value="<?=$Emp[0]->idEmpleado;?>" >
        </div>

        <div class="mb-3">
            <label for="telefonoEmpleado" class="form-label">Telefono Empleado</label>
            <input name="telefonoEmpleado" type="tel" value="<?=$Emp[0]->telefonoEmpleado; ?>"
                 class="form-control" id="Empleado" placeholder="Inserta el telefono del empleado">
           <input type="hidden" name="idEmpleado" value="<?=$Emp[0]->idEmpleado;?>" >
        </div>

        <div class="mb-3">
            <label for="fechaSEmpleado" class="form-label">Fecha salida empleado</label>
            <input name="fechaSEmpleado" type="date" value="<?=$Emp[0]->fechaSEmpleado; ?>"
                 class="form-control" id="Empleado" placeholder="Inserta la fecha de salida empleado">
           <input type="hidden" name="idEmpleado" value="<?=$Emp[0]->idEmpleado;?>" >
        </div>

        
        <input type="submit" class="btn btn-success" name="Modificar" value="Modificar">
        </form>
    
    </div>
    </div>
</div>