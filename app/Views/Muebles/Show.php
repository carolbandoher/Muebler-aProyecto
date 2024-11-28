<link rel="stylesheet" href="<?= base_url('css/backend.css') ?>">
<div class="form-container">
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Datos de muebles</h1>
            <a href="<?=base_url('Muebles/Add/');?>" class="btn btn-success">Agregar</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <th>Nombre del mueble</th>
                    <th>Descripción del mueble</th>
                    <th>Precio del mueble</th>
                    <th>Cantidad del inventario</th>
                    <th>Categoría del mueble</th>
                </thead>
                <tbody>
                    <?php foreach($Mue as $J) :?>
                    <tr>
                        <td><?=$J->nombreMueble; ?></td>
                        <td><?=$J->descripcionM; ?></td>
                        <td><?=$J->precioMueble; ?></td>
                        <td><?=$J->cantidadInventario; ?></td>
                        <td><?=$J->categoriaMueble; ?></td>
                        <td>
                            <a href="<?= base_url('Muebles/delete/'.$J->idMueble); ?>" class="btn btn-danger" 
                               onclick="return confirm('¿Estás seguro de que deseas eliminar este cliente?');">Borrar</a>

                            <a href="<?=base_url('Muebles/Edit/'.$J->idMueble);?>" class="btn btn-warning"
                               onclick="return confirm('¿Estás seguro de que deseas editar la información de este cliente?');">Modificar</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>  
