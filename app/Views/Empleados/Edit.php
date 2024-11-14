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