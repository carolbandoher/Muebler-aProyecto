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

        <h2>Actualizar Cliente</h2>
        
    <form action="<?=base_url('Administrador/update/'); ?>" method="POST">
        <div class="mb-3">
            <label for="nombreUsuario" class="form-label">nombre Usuario</label>
            <input name="nombreUsuario" type="text" value="<?=$usua[0]->nombreUsuario; ?>"
                 class="form-control" id="usuario" placeholder="Inserta el nombre de usuario">
           <input type="hidden" name="idUsuario" value="<?=$usua[0]->idUsuario;?>" >
        </div>

        <div class="mb-3">
            <label for="apellidoPaterno" class="form-label">Apellido paterno</label>
            <input name="apellidoPaterno" type="text" value="<?=$usua[0]->apellidoPaterno; ?>"
                 class="form-control" id="usuario" placeholder="Inserta tu apellido paterno">
           <input type="hidden" name="idUsuario" value="<?=$usua[0]->idUsuario;?>" >
        </div>

        <div class="mb-3">
            <label for="apellidoMaterno" class="form-label">Apellido materno</label>
            <input name="apellidoMaterno" type="text" value="<?=$usua[0]->apellidoMaterno; ?>"
                 class="form-control" id="usuario" placeholder="Inserta tu apellido materno">
           <input type="hidden" name="idUsuario" value="<?=$usua[0]->idUsuario;?>" >
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input name="telefono" type="tel" value="<?=$usua[0]->telefono; ?>"
                 class="form-control" id="usuario" placeholder="Inserta tu telefono">
           <input type="hidden" name="idUsuario" value="<?=$usua[0]->idUsuario;?>" >
        </div>

        <div class="mb-3">
            <label for="correo" class="form-label">Correo</label>
            <input name="correo" type="email" value="<?=$usua[0]->correo; ?>"
                 class="form-control" id="usuario" placeholder="Inserta un correo">
           <input type="hidden" name="idUsuario" value="<?=$usua[0]->idUsuario;?>" >
        </div>

        <div class="mb-3">
            <label for="rol" class="form-label">Rol</label>
            <input name="rol" type="num" value="<?=$usua[0]->rol; ?>"
                 class="form-control" id="usuario" placeholder="Inserta el rol">
           <input type="hidden" name="idUsuario" value="<?=$usua[0]->idUsuario;?>" >
        </div>

        <div class="mb-3">
            <label for="pass" class="form-label">Contraseña</label>
            <input name="pass" type="num" value="<?=$usua[0]->pass; ?>"
                 class="form-control" id="usuario" placeholder="Inserta una contraseña">
           <input type="hidden" name="idUsuario" value="<?=$usua[0]->idUsuario;?>" >
        </div>

        
        <input type="submit" class="btn btn-success" name="Modificar" value="Modificar">
        </form>
    
    </div>
    </div>
</div>
</div>