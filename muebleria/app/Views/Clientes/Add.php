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
            <input name="fechaRegistro" type="text" 
            class="form-control" id="idCliente"
            required
            placeholder="fecha de registro" value="<?= set_value('fechaRegistro') ?>" >
        </div>

        <div class="mb-3">
            <label for="telefonoCliente" class="form-label">Teléfono del cliente</label>
            <input name="telefonoCliente" type="text" 
            class="form-control" id="idCliente"
            required
            placeholder="Teléfono del cliente" value="<?= set_value('telefonoCliente') ?>" >
        </div>
        <input type="submit" class="btn btn-success" value="Agregar">
        </form>
    
    </div>
    </div>
</div>