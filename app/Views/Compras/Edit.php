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

        <h2>Actualizar Empleado</h2>
        
    <form action="<?=base_url('Compras/update/'); ?>" method="POST">
        <div class="mb-3">
            <label for="fechaCompra" class="form-label">Fecha de la compra</label>
            <input name="fechaCompra" type="date" value="<?=$Com[0]->fechaCompra; ?>"
                 class="form-control" id="compra" placeholder="Fecha de la compra">
           <input type="hidden" name="idCompra" value="<?=$Com[0]->idCompra;?>" >
        </div>

        <div class="mb-3">
            <label for="cantidadCompra" class="form-label">Cantidad de la compra</label>
            <input name="cantidadCompra" type="text" value="<?=$Com[0]->cantidadCompra; ?>"
                 class="form-control" id="compra" placeholder="Cantidad de la compra">
           <input type="hidden" name="idCompra" value="<?=$Com[0]->idCompra;?>" >
        </div>

        <div class="mb-3">
            <label for="totalCompra" class="form-label">Total de la compra</label>
            <input name="totalCompra" type="text" value="<?=$Com[0]->totalCompra; ?>"
                 class="form-control" id="compra" placeholder="Total de la compra">
           <input type="hidden" name="idCompra" value="<?=$Com[0]->idCompra;?>" >
        </div>

        <div class="mb-3">
            <label for="descripcionCompra" class="form-label">Descripción Compra</label>
            <input name="descripcionCompra" type="text" value="<?=$Com[0]->descripcionCompra; ?>"
                 class="form-control" id="compra" placeholder="Descripción Compra">
           <input type="hidden" name="idCompra" value="<?=$Com[0]->idCompra;?>" >
        </div>

        
        <input type="submit" class="btn btn-success" name="Modificar" value="Modificar">
        </form>
    
    </div>
    </div>
</div>
</div>