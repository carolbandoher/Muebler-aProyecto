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

        <h2>Agregar Muebles</h2>
        <?= validation_list_errors() ?>

    <form action="<?=base_url('Ventas/insert'); ?>" method="POST">
    <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
        <div class="mb-3">
            <label for="fechaVenta" class="form-label">Fecha de la venta</label>
            <input name="fechaVenta" type="date" 
            class="form-control" id="idVenta"
            required
            placeholder="Fecha de la venta" value="<?= set_value('fechaVenta') ?>" >
        </div>

        <div class="mb-3">
            <label for="cantidadV" class="form-label">Cantidad de la venta</label>
            <input name="cantidadV" type="text" 
            class="form-control" id="idVenta"
            required
            placeholder="Cantidad de la venta" value="<?= set_value('cantidadV') ?>" >
        </div>

        <div class="mb-3">
            <label for="precioV" class="form-label">Precio de la venta</label>
            <input name="precioV" type="text" 
            class="form-control" id="idVenta"
            required
            placeholder="Precio de la venta" value="<?= set_value('precioV') ?>" >
        </div>

        <div class="mb-3">
            <label for="metodoPago" class="form-label">Método de pago</label>
            <input name="metodoPago" type="text" 
            class="form-control" id="idVenta"
            required
            placeholder="Método de pago" value="<?= set_value('metodoPago') ?>" >
        </div>

        <div class="mb-3">
            <label for="descripcionVenta" class="form-label">Descripción de la venta</label>
            <input name="descripcionVenta" type="Tel" 
            class="form-control" id="idVenta"
            required
            placeholder="Descripción de la venta" value="<?= set_value('descripcionVenta') ?>" >
        </div>
        <input type="submit" class="btn btn-success" value="Agregar">

    
    </div>
    </div>
</div>

</div>