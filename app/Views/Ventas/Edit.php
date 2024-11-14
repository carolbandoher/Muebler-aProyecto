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

        <h2>Actualizar Venta</h2>
       
    <form action="<?=base_url('Ventas/update/'); ?>" method="POST">
        <div class="mb-3">
            <label for="fechaVenta" class="form-label">Fecha de la venta</label>
            <input name="fechaVenta" type="date" value="<?=$Ven[0]->fechaVenta; ?>"
                 class="form-control" id="venta" placeholder="Inserta la fecha de la venta">
           <input type="hidden" name="idVenta" value="<?=$Ven[0]->idVenta;?>" >
        </div>

        <div class="mb-3">
            <label for="cantidadV" class="form-label">Cantidad de la venta</label>
            <input name="cantidadV" type="text" value="<?=$Ven[0]->cantidadV; ?>"
                 class="form-control" id="venta" placeholder="Inserta la cantidad de la venta">
           <input type="hidden" name="idVenta" value="<?=$Ven[0]->idVenta;?>" >
        </div>

        <div class="mb-3">
            <label for="precioV" class="form-label">Precio de la venta</label>
            <input name="precioV" type="text" value="<?=$Ven[0]->precioV; ?>"
                 class="form-control" id="venta" placeholder="Inserta el precio de la venta">
           <input type="hidden" name="idVenta" value="<?=$Ven[0]->idVenta;?>" >
        </div>

        <div class="mb-3">
            <label for="metodoPago" class="form-label">Método de pago</label>
            <input name="metodoPago" type="text" value="<?=$Ven[0]->metodoPago; ?>"
                 class="form-control" id="mueble" placeholder="Método de pago">
           <input type="hidden" name="idVenta" value="<?=$Ven[0]->idVenta;?>" >
        </div>

        <div class="mb-3">
            <label for="descripcionVenta" class="form-label">Descripción de la venta</label>
            <input name="descripcionVenta" type="text" value="<?=$Ven[0]->descripcionVenta; ?>"
                 class="form-control" id="cliente" placeholder="Inserta la cdescripción de la venta">
           <input type="hidden" name="idVenta" value="<?=$Ven[0]->idVenta;?>" >
        </div>

        
        <input type="submit" class="btn btn-success" name="Modificar" value="Modificar">
        </form>
    
    </div>
    </div>
</div>
</div>