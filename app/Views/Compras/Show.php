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
        <h1>Datos Compra</h1>
        <a href="<?=base_url('Compras/Add/');?> " class="btn btn-success">Agregar</a>
    </div>
</div>
    <div class="row">
        <div class="col">
           
            <table class="table table-striped">
                <thead>
                    <th>
                        Fecha de la compra
                    </th>
                    <th>
                        Cantidad de compra
                    </th>
                    <th>
                        Total de compra
                    </th>
                    <th>
                        Descripcion de la compra
                    </th>

                </thead>
                <tbody>
                <?php foreach($Com as $J) :?>
                    <tr>
                        
                        <td><?=$J->fechaCompra; ?></td>
                        <td><?=$J->cantidadCompra; ?></td>
                        <td><?=$J->totalCompra; ?></td>
                        <td><?=$J->descripcionCompra; ?></td>
                        



                        <td>
                        <a href="<?= base_url('Compras/delete/'.$J->idCompra); ?>" class="btn btn-danger" 
                        onclick="return confirm('¿Estás seguro de que deseas eliminar esta Compra?');">Borrar</a>

                        <a href="<?=base_url('Compras/Edit/'.$J->idCompra);?> " class="btn btn-warning"
                        onclick="return confirm('¿Estás seguro de que deseas editar la información de esta Compra?');">Modificar</a>
                            
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>