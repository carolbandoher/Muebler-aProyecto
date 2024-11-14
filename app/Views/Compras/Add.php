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

        <h2>Datos</h2>
        <?= validation_list_errors() ?>

    <form action="<?=base_url('Compras/insert'); ?>" method="POST">
    <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
        <div class="mb-3">
            <label for="fechaCompra" class="form-label">Fecha de compra</label>
            <input name="fechaCompra" type="date" 
            class="form-control" id="idCompra"
            required placeholder="Fecha de compra" value="<?= set_value('fechaCompra') ?>" >
        </div>

        <div class="mb-3">
            <label for="cantidadCompra" class="form-label">Cantidad</label>
            <input name="cantidadCompra" type="text" 
            class="form-control" id="idCompra"
            required placeholder="Cantidad" value="<?= set_value('cantidadCompra') ?>" >
        </div>

        <div class="mb-3">
            <label for="totalCompra" class="form-label">Total de la compra</label>
            <input name="totalCompra" type="text" 
            class="form-control" id="idCompra"
            required placeholder="Total de la compra" value="<?= set_value('totalCompra') ?>" >
        </div>

        <div class="mb-3">
            <label for="descripcionCompra" class="form-label">Descripción de la compra</label>
            <input name="descripcionCompra" type="text" 
            class="form-control" id="idCompra"
            required
            placeholder="Descripción de la compra" value="<?= set_value('descripcionCompra') ?>" >
        </div>

        <input type="submit" class="btn btn-success" value="Agregar">
        
    
    </div>
    </div>
</div>
</div>