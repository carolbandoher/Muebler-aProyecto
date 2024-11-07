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
            <input name="fechaRegistro" type="text" value="<?=$cliente[0]->fechaRegistro; ?>"
                 class="form-control" id="cliente" placeholder="Inserta tu fecha de registro">
           <input type="hidden" name="idCliente" value="<?=$cliente[0]->idCliente;?>" >
        </div>

        <div class="mb-3">
            <label for="telefonoCliente" class="form-label">Teléfono del cliente</label>
            <input name="telefonoCliente" type="text" value="<?=$cliente[0]->telefonoCliente; ?>"
                 class="form-control" id="cliente" placeholder="Inserta tu teléfono del cliente">
           <input type="hidden" name="idCliente" value="<?=$cliente[0]->idCliente;?>" >
        </div>

        
        <input type="submit" class="btn btn-success" name="Modificar" value="Modificar">
        </form>
    
    </div>
    </div>
</div>