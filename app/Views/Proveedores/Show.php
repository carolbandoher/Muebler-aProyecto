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
            max-width: 6000px;
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
        <h1>Datos Proveedor</h1>
        <a href="<?=base_url('Proveedores/Add/');?> " class="btn btn-success">Agregar</a>
    </div>
</div>
    <div class="row">
        <div class="col">
           
            <table class="table table-striped">
                <thead>
                    <th>
                        nombre proveedor
                    </th>
                    <th>
                        apellido proveedor
                    </th>
                    <th>
                        telefono del proveedor
                    </th>
                    <th>
                        NIF proveedor
                    </th>

                </thead>
                <tbody>
                <?php foreach($Pro as $J) :?>
                    <tr>
                        
                        <td><?=$J->nombreProveedor; ?></td>
                        <td><?=$J->apellidoProveedor; ?></td>
                        <td><?=$J->telefonoProveedor; ?></td>
                        <td><?=$J->NIF; ?></td>
                        



                        <td>
                        <a href="<?= base_url('Proveedores/delete/'.$J->idProveedor); ?>" class="btn btn-danger" 
                        onclick="return confirm('¿Estás seguro de que deseas eliminar este Proveedor?');">Borrar</a>

                        <a href="<?=base_url('Proveedores/Edit/'.$J->idProveedor);?> " class="btn btn-warning"
                        onclick="return confirm('¿Estás seguro de que deseas editar la información de este Proveedor?');">Modificar</a>
                            
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>