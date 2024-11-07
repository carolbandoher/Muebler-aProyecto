<div class="container">

<div class="row">
    <div class="col">
        <h1>Datos</h1>
        <a href="<?=base_url('Clientes/Add/');?> " class="btn btn-success">Agregar</a>
    </div>
</div>
    <div class="row">
        <div class="col">
           
            <table class="table table-striped">
                <thead>
                    <th>
                        nombre
                    </th>
                    <th>
                        apellido
                    </th>
                    <th>
                        Codigo postal
                    </th>
                    <th>
                        fecha de registro
                    </th>
                    <th>
                        telefono del cliente
                    </th>
                </thead>
                <tbody>
                <?php foreach($cli as $J) :?>
                    <tr>
                        
                        <td><?=$J->nombreCliente; ?></td>
                        <td><?=$J->apellidoCliente; ?></td>
                        <td><?=$J->codigoPostal; ?></td>
                        <td><?=$J->fechaRegistro; ?></td>
                        <td><?=$J->telefonoCliente; ?></td>



                        <td>
                        <a href="<?= base_url('Clientes/delete/'.$J->idCliente); ?>" class="btn btn-danger" 
                        onclick="return confirm('¿Estás seguro de que deseas eliminar este cliente?');">Borrar</a>

                        <a href="<?=base_url('Clientes/Edit/'.$J->idCliente);?> " class="btn btn-warning"
                        onclick="return confirm('¿Estás seguro de que deseas editar la información de este cliente?');">Modificar</a>
                            
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>